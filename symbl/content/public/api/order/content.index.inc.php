<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oInvoice = \Cnx\Db\Table::factory($DB, TB_REL_ACTIVATION_INVOICE);

if ((isset($ARGV[0])) && ($oInvoice->loadBy("klarna_order_id", $ARGV[0]))) {


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $connector = Klarna\Rest\Transport\Connector::create(KLARNA_MERCHANT_ID, KLARNA_SHARED_SECRET, KLARNA_BASE_URL);


    try {
        $order = new Klarna\Rest\OrderManagement\Order($connector, $oInvoice->klarna_order_id);
        $order->fetch();


        $order = new Klarna\Rest\OrderManagement\Order($connector, $oInvoice->klarna_order_id);
        $order->updateMerchantReferences([
            "merchant_reference1" => $oInvoice->ident
        ]);
        $order->acknowledge();

        $oInvoice->activation->fk_status = STATUS_INACTIVE;
        if ($oInvoice->activation->save(false)) {


            // +----------------------------------------------------------------------+
            // | User - Mail                                                          |
            // +----------------------------------------------------------------------+
            $maildata               = $oInvoice->activation->toMaildata();
            $maildata["invoice"]    = $oInvoice->toMaildata();
            $maildata["klarna"]     = $oInvoice->fetchOrder($I18N);

            $options                = array("_return" => "command");
            $options["attachments"] = array(
                array(\Cnx\MediaFile::$INC_MEDIA_DIR . "agb.pdf", 'application/octet-stream', "Allgemeine Geschäftsbedingungen.pdf")
            );

            try {
                \Cnx\Db\Table::factory($DB, TB_MAIL)->sendmail("order.acknowledged", $oInvoice->getEmail(), $maildata, $options);
            } catch (\Exception $oEx) {
                \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
            }

        }

    } catch (\Exception $oEx) {
        echo $oEx->getMessage();
    }


}

// +----------------------------------------------------------------------+
// | for debugging                                                        |
// +----------------------------------------------------------------------+
$value = array("time" => date("Y-m-d H:i:s"), "invoice" => $oInvoice->toArray(), "POST" => $_POST, "GET" => $_GET, "ARGV" => $ARGV);

file_put_contents(__DIR__ . "/log.txt", CRLF . var_export($value, true) . CRLF . CRLF, \FILE_APPEND);


$result = $value;
unset($result["invoice"]);