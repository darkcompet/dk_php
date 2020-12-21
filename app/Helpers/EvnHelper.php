<?php

namespace App\Helpers;

class EnvHelper {
    public static function getEnv() {
        return env('APP_ENV');
    }
    
    public static function isProduction() {
        return self::getEnv() == 'production';
    }
    
    public static function isLocal() {
        return self::getEnv() == 'local';
    }
    
    public static function isDebuggable() {
        return env('APP_DEBUG') == 'true';
    }
}
