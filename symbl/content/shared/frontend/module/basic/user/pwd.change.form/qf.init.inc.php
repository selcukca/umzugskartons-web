<?php

// +----------------------------------------------------------------------+
// | QuickForm - Initialisierung                                          |
// +----------------------------------------------------------------------+
$oF->init("qF_{$content->id}", 'post', WWW_SCRIPT_DIR . WWW_ARGV . format_query(GET_QUERY) . http_build_query($_GET), '', null, null);
