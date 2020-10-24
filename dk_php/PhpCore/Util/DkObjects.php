<?php

namespace App\Tool\PhpCore\Util;

/**
 * Object Utility.
 * 
 * @author darkcompet
 */
class DkObjects {
   /**
    * Convert given object to string so we can print out it.
    * @param object $obj any
    */
   public static function toString($obj) {
      return print_r($obj, true);
   }
}
