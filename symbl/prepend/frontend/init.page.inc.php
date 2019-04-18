<?php

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
use \Cnx\Page\Minifier\Element as Minifier;




// +----------------------------------------------------------------------+
// | Titel                                                                |
// +----------------------------------------------------------------------+
$PAGE["title"] = "symbl.frontend: " . REAL_PROJECT_NAME;

// +----------------------------------------------------------------------+
// | CSS                                                                  |
// +----------------------------------------------------------------------+
$PAGE["css"][] = new Minifier(WWW_HOME_DIR . "vendor/bootstrap/css/bootstrap.min.css", false);
$PAGE["css"][] = new Minifier(WWW_HOME_DIR . "vendor/font-awesome/css/font-awesome.min.css", false);
$PAGE["css"][] = new Minifier(WWW_HOME_DIR . "vendor/simple-line-icons/css/simple-line-icons.css", false);
//$PAGE["css"][] = new Minifier("https://fonts.googleapis.com/css?family=Lato", false);
//$PAGE["css"][] = new Minifier("https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900", false);
//$PAGE["css"][] = new Minifier("https://fonts.googleapis.com/css?family=Muli", false);

$PAGE["css"][] = new Minifier(WWW_PROJECT_CSS_DIR . "device-mockups.min.css", false);
$PAGE["css"][] = new Minifier(WWW_PROJECT_CSS_DIR . "new-age.min.css", false);



// +----------------------------------------------------------------------+
// | JavaScript                                                           |
// +----------------------------------------------------------------------+
$PAGE["javascript"][] = new Minifier(WWW_HOME_DIR . "vendor/jquery/jquery.min.js", false);
$PAGE["javascript"][] = new Minifier(WWW_HOME_DIR . "vendor/bootstrap/js/bootstrap.bundle.min.js", false);
$PAGE["javascript"][] = new Minifier(WWW_HOME_DIR . "vendor/jquery-easing/jquery.easing.min.js", false);
$PAGE["javascript"][] = new Minifier(WWW_PROJECT_JS_DIR . "chosen.jquery.min.js", false);
$PAGE["javascript"][] = new Minifier(WWW_PROJECT_JS_DIR . "new-age.min.js", false);

$PAGE["javascript"][] = new Minifier(WWW_JS_DIR . "symbl.js");


$PAGE["javascript"][] = new Minifier(WWW_PROJECT_JS_DIR . "owl.carousel.min.js", null, "carousel", false);




// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$PAGE["css"][]        = new Minifier(WWW_PROJECT_CSS_DIR . "jquery/fancybox/fancybox.min.css", null, array("carousel", "fancybox"), false);
$PAGE["javascript"][] = new Minifier(WWW_PROJECT_JS_DIR . "jquery/fancybox/fancybox.min.js", null, array("carousel", "fancybox"), false);

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$PAGE["css"][]        = new Minifier(WWW_PROJECT_CSS_DIR . "jquery/fileupload/fileupload.min.css", null, array("fileupload"), false);
$PAGE["javascript"][] = new Minifier(WWW_PROJECT_JS_DIR . "jquery/fileupload/fileupload.min.js", null, array("fileupload"), false);









// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
//$PAGE["meta"]["facebook"]["og:app_id"]          = "110294572990481";
$PAGE["meta"]["facebook"]["og:title"]           = "Umzugskartons App";
$PAGE["meta"]["facebook"]["og:type"]            = "website";
$PAGE["meta"]["facebook"]["og:url"]             = "https://www.umzugskartons-app.de";
$PAGE["meta"]["facebook"]["og:image"]           = HTTP_HOST . WWW_HOME_DIR . "thumb/476x249x1/default.png";
$PAGE["meta"]["facebook"]["og:description"]     = "Steht ein Umzug bevor? Mit der App 'Umzugskartons' verwaltest du deine Umzugskartons. Suchst du etwas und weißst nicht mehr in welchem Karton es war? Kein Problem - der Inventar unterstüzt dich.";
$PAGE["meta"]["facebook"]["og:site_name"]       = "Umzugskartons";
