<?php

namespace App\Tool\Compet\Core;

class DkLogs {
    /**
     * Dump and stop page to see result.
     * Or use snippet: `dkdd`
     *
     * @param object $obj any.
     */
    public static function dump($obj) {
        echo "<pre>";
        var_dump($obj);
        die();
    }
}
