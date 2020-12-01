<?php

namespace App\Helpers;

class FormHelper {
   /**
    * @return array Values at given key.
    */
   public static function valuesAtKey($rows, $key) {
      $result = [];
      foreach ($rows as $row) {
         $result [] = $row[$key];
      }
      return $result;
   }
   
   /**
    * Make a value1-value2 map (array) between given 2 keys.
    * @return array
    */
   public static  function valuesMapping(&$arr, $key1, $key2) {
      $res = [];
      foreach ($arr as $item) {
         $res[$item[$key1]] = $item[$key2];
      }
      return $res;
   }
   
   public static  function trimParams(&$params) {
      foreach ($params as &$item) {
         if (is_string($item)) {
            $item = trim($item);
         }
         else if (is_array($item)) {
            self::trimParams($item);
         }
      }
      unset($item);
   }
}
