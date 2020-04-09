<?php

namespace App\Tool\Core\Util;

class DkArrays {
   /**
    * Count number of elements in an array.
    *
    * @param $arr array
    * @return int number of element in given array.
    */
   public static function size($arr) {
      return isset($arr) ? count($arr) : 0;
   }
}
