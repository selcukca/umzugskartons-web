<?php

use Endroid\QrCode\QrCode;
use Endroid\QrCode\ErrorCorrectionLevel;
use mikehaertl\wkhtmlto\Pdf;

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$code = (isset($ARGV[0]))? $ARGV[0] : false;


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$barcodes = array("hash" => "", "app" => "");

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$qrCode = new QrCode();
$qrCode
    ->setSize(350)
    ->setMargin(25)
    ->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH)
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabelFontSize(22)
    //->render();
    ;



$qrCode->setText($code)->setLabel($code);
$barcodes["hash"] = $qrCode->writeDataUri();

$qrCode->setText("https://www.umzugskartons-app.de/{$LANGUAGE->ident}/partner-link/{$code}/")->setLabel("www.umzugskartons.app");
$barcodes["app"] = $qrCode->writeDataUri();





// +----------------------------------------------------------------------+
// | Template - Initialisierung                                           |
// +----------------------------------------------------------------------+
$oTpl = null;
$fTpl = \Cnx\Template::create($oTpl, __FILE__, true);




// +----------------------------------------------------------------------+
// |  Template - Zuweisung                                                |
// +----------------------------------------------------------------------+
$oTpl->assign("barcodes",    $barcodes);
$oTpl->assign("I18N",        $I18N);
//$oTpl->assign("categorylist",   $categorylist);



// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$html = $oTpl->fetch($fTpl);



if (isset($_GET["preview"])) {
    echo $html;
    exit;
}



// +----------------------------------------------------------------------+
// | PDF erstellen                                                        |
// +----------------------------------------------------------------------+
$page = 1;


$options = array(
    'encoding'          => 'UTF-8',
    "page-size"         => 'A4',
    //"footer-right"      => "",
    //"footer-font-size"  => 8,
    //"footer-font-name"  => "DIN",
    'replace' => array(
        '{page}'  => "",
        '{title}' => "page.title"
    ),
    'title' => "page.title1"
);

$pdf = new Pdf($options);
if (WAMP) {
    $pdf->binary = 'C:\\Programme\\wkhtmltopdf\\bin\\wkhtmltopdf.exe';
} else {
    $pdf->binary = '/bin/wkhtmltopdf-0.12.4';
}

$pdf->setOptions($options);
$pdf->addPage($html);

$pdf->send($filename = "flyer.pdf");

exit;
