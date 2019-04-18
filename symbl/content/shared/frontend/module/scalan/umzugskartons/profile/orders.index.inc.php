<?php



// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$I18N    = $smarty->getTemplateVars("I18N");
$USER    = $smarty->getTemplateVars("USER");
$STRUCTURE  = $smarty->getTemplateVars("STRUCTURE");
$DB         = \Cnx\Db::getInstance();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$smarty->assign("orderlist",  $orderlist = $USER->relocation->orders );


$details = null;
if (isset($_GET["details"])) {
    foreach ($orderlist as $order) {
        if ($order->invoice->ident == $_GET["details"]) {
            $details = $order;
        }
    }
}
if ($details) {


    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $connector = Klarna\Rest\Transport\Connector::create(KLARNA_MERCHANT_ID, KLARNA_SHARED_SECRET, KLARNA_BASE_URL);


    try {
        $order = new Klarna\Rest\OrderManagement\Order($connector, $details->invoice->klarna_order_id);
        $order->fetch();

        $smarty->assign("orders", array($details->id => $order));

    } catch (Exception $oEx) {
        //$smarty->assign("orders", array($_GET["details"] => array()));

    }



}
