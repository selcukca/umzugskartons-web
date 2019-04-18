<?php


// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$I18N    = $smarty->getTemplateVars("I18N");
$USER    = $smarty->getTemplateVars("USER");
$STRUCTURE  = $smarty->getTemplateVars("STRUCTURE");
$DB         = \Cnx\Db::getInstance();


$BASKET  = $_SESSION[REAL_PROJECT_NAME]["BASKET"];
$PACKAGE = $BASKET["PACKAGE"];
$COUPON  = $BASKET["COUPON"];
$PERIOD  = $BASKET["PERIOD"];

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$connector = Klarna\Rest\Transport\Connector::create(KLARNA_MERCHANT_ID, KLARNA_SHARED_SECRET, KLARNA_BASE_URL);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$orderId = ((isset($_GET["sip"])) && ($_GET["sip"] == $BASKET["ORDER_ID"]))? $_GET["sip"] : false;

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
try {


    if ($orderId) {

        $checkout = new Klarna\Rest\Checkout\Order($connector, $orderId);
        $checkout->fetch();


        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        $smarty->assign("klarna", $checkout);
    }

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    if ($PACKAGE) {

        // +----------------------------------------------------------------------+
        // |                                                                      |
        // +----------------------------------------------------------------------+
        $oActivation = new \Symbl\Db\Table\Scalan\Umzugskartons\TdtaActivation($DB);
        $oActivation->ident         = $BASKET["CODE"];
        $oActivation->fk_company    = $USER->relocation->id;
        $oActivation->fk_products   = $PACKAGE->data->fk_products;
        $oActivation->quantity      = 0;
        $oActivation->valid_from    = date("Y-m-d");
        $oActivation->valid_until   = date("Y-m-d", mktime(0,0,0, date("n"), date("j")+1, date("Y") + 1));
        if ($PACKAGE->data->isFree($USER->relocation->country)) {
            $oActivation->fk_status     = STATUS_ONLINE;
        } else {
            $oActivation->fk_status     = STATUS_DRAFT;
        }

        if ($oActivation->save(USER_ID)) {
            $oActivation->invoice->fk_activation    = $oActivation->id;
            $oActivation->invoice->klarna_order_id  = $orderId;
            $oActivation->invoice->fk_user          = $USER->id;
            $oActivation->invoice->company          = $USER->relocation;
            $oActivation->invoice->package          = $PACKAGE;
            $oActivation->invoice->period           = $PERIOD;
            $oActivation->invoice->coupon           = $COUPON;
            $oActivation->invoice->ident            = $oActivation->invoice->generateInvoiceNumber();
            $oActivation->invoice->is_payed         = ($oActivation->fk_status == STATUS_ONLINE)? 1 : 0;

            if ($oActivation->invoice->save(USER_ID)) {

                //$oPdf = $oActivation->generatePDF();
                //$oPdf->Output($oActivation->getPdfFile()->getPathname(), "F");


                $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PACKAGE"] = false;
                $_SESSION[REAL_PROJECT_NAME]["BASKET"]["CODE"]    = "";
                $_SESSION[REAL_PROJECT_NAME]["BASKET"]["COUPON"]  = null;



                // +----------------------------------------------------------------------+
                // | User - Mail                                                          |
                // +----------------------------------------------------------------------+
                $maildata               = $oActivation->toMaildata();
                $maildata["invoice"]    = $oActivation->invoice->toMaildata();
                $maildata["klarna"]     = $oActivation->invoice->fetchOrder($I18N);

                $options                = array("_return" => "command");
                $options["attachments"] = array(
                    array(\Cnx\MediaFile::$INC_MEDIA_DIR . "agb.pdf", 'application/octet-stream', "Allgemeine Geschäftsbedingungen.pdf")
                );

                try {
                    $mailresult = \Cnx\Db\Table::factory($DB, TB_MAIL)->sendmail("order.created", "selcuk.alan@scalan.de", $maildata, $options);

                } catch (\Exception $oEx) {
                    \Cnx\Debugger::err($oEx, __FILE__, __LINE__);
                }


            }

        }



    }


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $_SESSION[REAL_PROJECT_NAME]["BASKET"]["PACKAGE"] = false;
    $_SESSION[REAL_PROJECT_NAME]["BASKET"]["CODE"]    = "";


} catch (Exception $e) {
    echo 'Caught exception: ' . $e->getMessage() . "\n";
}


