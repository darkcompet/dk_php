<?php

$arr = [];

if ($a) echo 'empty array will make false condition';

foreach ($arr as $k => $v) {
   echo "$k, $v\n";
}

if (empty(" ")) {
   echo "empty";
}

class X {
   function foo() {
      return "this is foo";
   }
}
