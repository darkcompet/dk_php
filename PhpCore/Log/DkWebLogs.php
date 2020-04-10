<?php

namespace App\Tool\PhpCore\Log;

class DkWebLogs extends AbsLogs {
   /**
    * Dump and stop page to see result.
    * @param $obj
    */
   public static function dump($obj) {
      var_dump($obj);
      die();
   }
}
