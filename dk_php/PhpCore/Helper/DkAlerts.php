<?php

namespace App\Tool\PhpCore\Helper;

class DkAlerts {
   /**
    * Popup a normal message with hard dialog so user must click to close.
    *
    * @param string $msg message
    */
   public static function alert($msg) {
      echo "<script type='text/javascript'>alert('$msg');</script>";
   }
}
