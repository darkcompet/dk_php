<?php

namespace App\Utils;

class Arrays {
    /**
     * Merge 2 arrays with given action.
     * @param array $arr1 Array
     * @param array $arr2 Array
     * @return array
     */
    public static function mergeArray($arr1, $arr2, $merge_action) {
        $result = [];
        $all_keys = array_merge(array_keys($arr1), array_keys($arr2));

        foreach ($all_keys as $key) {
            $val1 = $arr1[$key] ?? null;
            $val2 = $arr2[$key] ?? null;
            $val1_is_array = is_array($val1);
            $val2_is_array = is_array($val2);
            
            if ($val1_is_array && $val2_is_array) {
                $result[$key] = self::mergeArray($val1, $val2, $merge_action);
            }
            else if ($val1_is_array) {
                $result[$key] = self::mergeArray($val1, [], $merge_action);
            }
            else if ($val2_is_array) {
                $result[$key] = self::mergeArray([], $val2, $merge_action);
            }
            else {
                $result[$key] = $merge_action($val1, $val2);
            }
        }

        return $result;
    }
}