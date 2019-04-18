<?php



// +----------------------------------------------------------------------+
// | Template - Variabeln                                                 |
// +----------------------------------------------------------------------+
$content = $smarty->getTemplateVars("content");
$I18N    = $smarty->getTemplateVars("I18N");
$USER    = $smarty->getTemplateVars("USER");
$STRUCTURE  = $smarty->getTemplateVars("STRUCTURE");
$DB         = \Cnx\Db::getInstance();
$LANGUAGE  = $smarty->getTemplateVars("LANGUAGE");

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
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
$order = [
    "customer" => [
        "type" => "organization"
    ],
    "billing_address"   => $address = $USER->relocation->toKlarna(),
    //"shipping_address"  => $address,
    "purchase_country"  => $USER->relocation->country->countrycode,  //"de",
    "purchase_currency" => $USER->relocation->country->currency,  //"eur",
    "locale"            => ($LANGUAGE->ident == "de")? "de-de" : "en-en",
    "order_lines"       => $PACKAGE->toKlarna($I18N, $USER->relocation->country, $PERIOD, $COUPON, ["code" => $BASKET["CODE"]], $amount, $tax),
    "order_amount"      => $amount,
    "order_tax_amount"  => $tax,

    "merchant_urls" => [
        "terms"              => $STRUCTURE["AGB"]->linkto->getUrl(false, true),
        "cancellation_terms" => $STRUCTURE["DISCLAIMER"]->linkto->getUrl(false, true),
        "checkout"           => HTTP_HOST . WWW_SCRIPT_DIR . WWW_ARGV . "?sip={checkout.order.id}",
        "confirmation"       => format_query($STRUCTURE["ORDER_COMPLETE"]->linkto->getUrl(false, true)) . "sip={checkout.order.id}",
        "push"               => HTTP_HOST . WWW_HOME_DIR . "public/api/order/{checkout.order.id}"
    ],
    "options" => [
        "color_button"              => "#0094cb",
        "color_button_text"         => "#ffffff",
        "allow_separate_shipping_address" => false,
        "allowed_customer_types" => ['organization']
        //"shipping_details" => "meine shippoing details",
        //"additional_checkboxes" => [
        //    ["id" => "nl", "text" => "Newsletter", "checked" => true, "required" => false]
     ],

];


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
try {

    $oOrder = new Klarna\Rest\Checkout\Order($connector);

    $oOrder->create($order);

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
    $_SESSION[REAL_PROJECT_NAME]["BASKET"]["ORDER_ID"] = $oOrder->getId();

    // +----------------------------------------------------------------------+
    // |                                                                      |
    // +----------------------------------------------------------------------+
   $smarty->assign("klarna", $oOrder);


} catch (Exception $e) {

}
