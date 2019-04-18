<?php
// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
if (!isset($_FILES["upload"])) {
    exit;
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$path      = "tmp/";
$overwrite = false;
$ext       = "png|jpg|jpeg";

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$UPLOAD_BASE_DIR = \Cnx\MediaFile::$INC_MEDIA_DIR;
if (is_dir($UPLOAD_BASE_DIR . $path)) {
    $UPLOAD_DIR = format_dir($UPLOAD_BASE_DIR . $path);
} else {
    $UPLOAD_DIR = $UPLOAD_BASE_DIR;
}
$UPLOAD_PREFIX   = str_replace($UPLOAD_BASE_DIR, "", $UPLOAD_DIR);


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
@chmod($UPLOAD_DIR, 0777);


// +----------------------------------------------------------------------+
// | \Cnx\File\Upload - init                                              |
// +----------------------------------------------------------------------+
$oUploader = new \Cnx\File\Upload($_FILES['upload'], $_SERVER);


// +----------------------------------------------------------------------+
// | \Cnx\File\Upload - config                                            |
// +----------------------------------------------------------------------+
$oUploader->setPathResolver(new \Cnx\File\Upload\PathResolver\Version($UPLOAD_DIR));
$oUploader->setFileSystem(new \Cnx\File\Upload\FileSystem\FileHash());


$oUploader->setFileNameGenerator(new \Cnx\File\Upload\FileNameGenerator\Sanitize($overwrite));


// +----------------------------------------------------------------------+
// | Validators                                                           |
// +----------------------------------------------------------------------+
//$oUploader->addValidator(new \Cnx\File\Upload\Validator\Simple(1024 * 1024 * 2, ['image/jpg']));
//$oUploader->addValidator(new \Cnx\File\Upload\Validator\Exists());
$oUploader->addValidator(new \Cnx\File\Upload\Validator\Extension($ext));


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$oUploader->addCallback("completed", $oUploader->onCompleted($UPLOAD_BASE_DIR));


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
list($files, $headers) = $oUploader->processAll();


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
foreach ($headers as $header => $value) {
    header($header . ': ' . $value);
}

// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
$result = $files[0];


// +----------------------------------------------------------------------+
// |                                                                      |
// +----------------------------------------------------------------------+
header("Content-Type: application/json", true);

if (isset($_GET['callback'])) {
    echo $_GET['callback'] . "(" . json_encode($result) . ")";
} else {
    echo json_encode($result);
}

exit;

