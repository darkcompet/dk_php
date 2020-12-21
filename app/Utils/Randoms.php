<?php

namespace App\Utils;

/**
 * Utility for random.
 * 
 * @author darkcompet
 */
class Randoms {
    public static function generateRandomKey($length = 64) {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $text = str_shuffle(str_repeat($input = $chars, ceil($length / strlen($input))));
        return substr($text, 1, $length);
    }
}
