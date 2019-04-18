<?php

// +----------------------------------------------------------------------+
// | QuickForm - Initialisierung                                          |
// +----------------------------------------------------------------------+
$oF->init("qF_{$content->id}", 'post', format_query(WWW_SCRIPT_DIR . WWW_ARGV . GET_QUERY) . "login", '', null, true);
