<?php

namespace App\Tool\PhpCore\Helper;

class DkAlerts {
   /**
    * Tell browser show a confirm popup.
    *
    * @param string $msg message
    */
   public static function alert($msg) {
      echo "<script type='text/javascript'>alert('$msg');</script>";
   }
}
