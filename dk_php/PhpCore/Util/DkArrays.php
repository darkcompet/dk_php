<?php

namespace App\Tool\PhpCore\Util;

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
}
