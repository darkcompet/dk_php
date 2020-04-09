<?php

namespace App\Tool\Core\Util;

/**
 * Utility class for String.
 *
 * @author darkcompet
 */
class DkStrings {
   /**
    * @param string $text
    * @param string $targetChar character should be trimed
    * @return false|string
    */
   public static function trim($text, $targetChar) {
      if ($text == null)
         return null;
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
    * @param array $items
    * @param string $separator
    * @return string
    */
   public static function join($items, $separator) {
      return implode($separator, $items);
   }

   /**
    * @param string $text
    * @param int $startIndex inclusive
    * @param int $endIndex exclusive
    * @return false|string
    */
   public static function substring($text, $startIndex, $endIndex) {
      return substr($text, $startIndex, $endIndex - $startIndex + 1);
   }

   public static function replace($text, $target, $replacement) {
      return str_replace($target, $replacement, $text);
   }

   public static function regex_replace($text, $pattern, $replacement) {
      return preg_replace($pattern, $replacement, $text);
   }

   /**
    * @param $format string like "print %d fields in class %s"
    * @param $args mixed list of argument
    * @return string
    */
   public static function format($format, $args) {
      return sprintf($format, $args);
   }
}
