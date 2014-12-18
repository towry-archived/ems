<?php if (!defined("TING")) die("Error");

function _e($v) {
    if (is_array($v)) {
        echo isset($v[0]) ? $v[0] : "";
    } else {
        echo $v;
    }
}
