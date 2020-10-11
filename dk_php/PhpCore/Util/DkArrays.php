<?php

namespace App\Tool\PhpCore\Util;

/**
 * Utility for array.
 * 
 * @author darkcompet
 */
class DkArrays {
   /**
    * Count number of elements in an array.
    *
    * @param $arr array
    * @return int number of element in given array.
    */
   public static function size($arr) {
      return count($arr);
   }
   
   public static function merge(...$arrs) {
      return array_merge($arrs);
   }
}
