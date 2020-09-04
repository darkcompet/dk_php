<?php

namespace App\Tool\PhpCore\Util;

use DateTime;

class DkDateTimes {
   const FORMAT = 'Y-m-d H:i:s';

   /**
    * Get current Unix timestamp in nano seconds.
    * @return int
    */
   public static function now() {
      return time();
   }

   /**
    * Get Unix timestamp in nano seconds from given text in given format.
    * For eg,. `text2time('2020-12-29 11:58:59', 'Y-m-d H:i:s')` will return Unix timestamp `1609271939`.
    * @param string $time_in_text
    * @param string $format
    * @param DateTimeZone $timezone
    * @return int
    */
   public static function text2time($time_in_text, $format, $timezone = null) {
      return DateTime::createFromFormat($format, $time_in_text, $timezone)->getTimestamp();
   }

   /**
    * Format given timestamp with given format.
    * @param int $timestamp Unix timestamp, for eg,. `time()`, `strtotime(+ 3 days)`
    * @param string $format result format, for eg,. `Y-m-d H:i:s` 
    * @return string formated timestamp
    */
   public static function format($timestamp, $format) {
      return date($format, $timestamp);
   }

   /**
    * Format given time with given format.
    * @param string $format for eg,. `YYYY-dd-mm HH:mm:ss` 
    * @return string formated time
    */
   public static function addDays($extraDays, $time) {
   }
}
