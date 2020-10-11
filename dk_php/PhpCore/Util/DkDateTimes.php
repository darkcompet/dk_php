<?php

namespace App\Tool\PhpCore\Helper;

use DateTime;

class DkDateTimes {
   const FORMAT = 'Y-m-d H:i:s';

   public static function now() {
      return time();
   }

   /**
    * Compare diff-value between 2 datetimes.
    * Caller can make params under `string` or `datetime` type,
    * for eg,. date('Y-m-d H:i:s') or '2020-10-09 13:35:59'.
    * 
    * @param string|DateTime $a_datetime Datetime in format `Y-m-d H:i:s`, can be VALID string or VALID datetime (日付型が正しいことが前提).
    * @param string|DateTime $b_datetime Datetime in format `Y-m-d H:i:s`, can be VALID string or VALID datetime (日付型が正しいことが前提).
    * @return int Diff value between given `a_datetime` and `b_datetime`. That is, if result is greater than 0,
    * then `a_datetime` > `b_datetime`, if result is 0 then they are equal, otherwise `b_datetime` > `a_datetime`.
    */
   public static function compare($a_datetime, $b_datetime) {
      $a_datetimes = self::splitDateTime($a_datetime);
      $b_datetimes = self::splitDateTime($b_datetime);

      $a_datetime_int = mktime(
         $a_datetimes["hour"], $a_datetimes["minute"], $a_datetimes["second"],
         $a_datetimes["month"], $a_datetimes["day"], $a_datetimes["year"]
      );

      $b_datetime_int = mktime(
         $b_datetimes["hour"], $b_datetimes["minute"], $b_datetimes["second"],
         $b_datetimes["month"], $b_datetimes["day"], $b_datetimes["year"]
      );

      return $a_datetime_int - $b_datetime_int;
   }

   /**
    * 日付文字列をDateTime型の配列に変換する
    *
    * @param string $dateStr 日付文字列 `Y-m-d H:i:s`
    * @return array String array of datetime ["year", "month", "day", "hour", "minute", "second"]
    */
   private static function splitDateTime($dateStr) {
      $dateStr = str_replace('/', '-', $dateStr);
      $dateTmp = explode(' ', $dateStr);
      $yyyymmdd = explode('-', $dateTmp[0]);
      
      if (count($dateTmp) > 1) {
         $hhiiss = explode(':', $dateTmp[1]);
      }
      else {
         $hhiiss = array();
         $hhiiss[0] = "00";
         $hhiiss[1] = "00";
         $hhiiss[2] = "00";
      }

      $dateTime["year"] = $yyyymmdd[0] ?? '';
      $dateTime["month"] = $yyyymmdd[1] ?? '';
      $dateTime["day"] = $yyyymmdd[2] ?? '';
      $dateTime["hour"] = $hhiiss[0] ?? '';
      $dateTime["minute"] = $hhiiss[1] ?? '';
      $dateTime["second"] = $hhiiss[2] ?? '';

      return $dateTime;
   }
   
   /**
    * Get Unix timestamp in nano seconds from given text in given format.
    * For eg,. `text2time('2020-12-29 11:58:59', 'Y-m-d H:i:s')` will return Unix timestamp `1609271939`.
    *
    * @param string $time_in_text
    * @param string $format
    * @param DateTimeZone $timezone
    * @return int
    */
   public static function text2time($time_in_text, $format, $timezone = null) {
      return DateTime::createFromFormat($format, $time_in_text, $timezone)->getTimestamp();
   }
}