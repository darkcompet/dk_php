<?php

namespace App\Algorithm\Internal;

/**
 * Array Merger.
 * 
 * @author darkcompet
 */
trait ArrayMerger {
   /**
    * Merge 2 arrays with given action.
    * @return array
    */
   public static function mergeArray($a, $b, $merge_action) {
      $result = [];
      $all_keys = array_merge(array_keys($a), array_keys($b));

      foreach ($all_keys as $key) {
         $a_val = $a[$key] ?? null;
         $b_val = $b[$key] ?? null;

         $a_val_is_array = is_array($a_val);
         $b_val_is_array = is_array($b_val);

         if ($a_val_is_array && $b_val_is_array) {
            $result[$key] = self::mergeArray($a_val, $b_val, $merge_action);
         }
         else if ($a_val_is_array) {
            $result[$key] = self::mergeArray($a_val, [], $merge_action);
         }
         else if ($b_val_is_array) {
            $result[$key] = self::mergeArray([], $b_val, $merge_action);
         }
         else {
            $result[$key] = $merge_action($a_val, $b_val);
         }
      }

      return $result;
   }
}
