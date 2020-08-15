<?php

namespace App\Tool\PhpCore\Log;

class DkWebLogs extends AbsLogs {
   /**
    * Dump and stop page to see result.
    *
    * @param object $obj any.
    */
   public static function dump($obj) {
      echo "<pre>"; var_dump($obj); die();
   }
}
