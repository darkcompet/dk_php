<?php

namespace App\Utils;

/**
 * String Utility.
 *
 * @author darkcompet
 */
class Strings {
    /**
     * @param string $text
     * @param string $targetChar character should be trimed
     * @return false|string
     */
    public static function trim($text, $targetChar) {
        if ($text == null) {
            return null;
        }

        $N = strlen($text);
        $start = 0;
        $end = $N - 1;

        while ($start <= $end && $text[$start] == $targetChar) {
            ++$start;
        }
        while ($end >= $start && $text[$end] == $targetChar) {
            --$end;
        }

        return ($start > 0 || $end < $N - 1) ? substr($text, $start, $end - $start + 1) : $text;
    }

    /**
     * @param string $text
     * @param string|null $delimiter
     * @return array|string return false if `delimiter` is null or empty
     *                otherwise return array of string.
     */
    public static function split($text, $delimiter) {
        if (!$text || !$delimiter) {
            return $text;
        }
        return explode($delimiter, $text);
    }

    /**
     * @param array $items an array of string element
     * @param string $separator like ":", "div"...
     * @return string
     */
    public static function join($items, $separator) {
        return implode($separator, $items);
    }

    /**
     * @param string $text target string
     * @param int $startIndex inclusive index
     * @param int $endIndex exclusive index
     * @return false|string
     */
    public static function substring($text, $startIndex, $endIndex) {
        return substr($text, $startIndex, $endIndex - $startIndex + 1);
    }

    /**
     * @param string $text
     * @param string $target
     * @param string $replacement
     * @return string|string[]
     */
    public static function replace($text, $target, $replacement) {
        return str_replace($target, $replacement, $text);
    }

    /**
     * Replace a substring which be expressed in regular expression with a replacement in given text.
     *
     * @param string $text
     * @param string $pattern like "/:/"
     * @param string $replacement like "new"
     * @return string|string[]|null
     */
    public static function replaceRegex($text, $pattern, $replacement) {
        return preg_replace($pattern, $replacement, $text);
    }

    /**
     * @param string $format like "print %d fields in class %s"
     * @param array $args list of argument
     * @return string
     */
    public static function format($format, $args) {
        return sprintf($format, $args);
    }

    /**
     * Convert html-special chars: & (アンパサンド)、< (小なり)、> (大なり)、' (シングルクォート)、" (ダブルクォート)
     * to html symbol which can be displayed normal in webpage.
     * In other words, this makes given `text` can be displayed well in html page.
     *
     * Refer: https://www.php.net/manual/ja/function.htmlspecialchars.php
     */
    public static function convertHtmlSpecialChars($text, $tag = ENT_QUOTES) {
        return htmlspecialchars($text, $tag);
    }

    public static function convertAllHtmlSpecialChars($text) {
        return htmlentities($text);
    }
}
