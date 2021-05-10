<?php

namespace App\Tool\Compet\Core;

/**
 * Various helper.
 */
class DkHelpers {
    /**
     * Tell browser show a confirm popup.
     *
     * @param string $msg message
     */
    public static function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
	
	public static function generateRandomKey($length = 64) {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $text = str_shuffle(str_repeat($chars, ceil($length / strlen($chars))));
        return substr($text, 1, $length);
    }
}