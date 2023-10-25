<?php
  // unordered list
  $arr = array(1, 2, 3, 3.14, 5, 4, 6, 9, 8);
  print_r($arr);
  // searche value
  $x = 3.14;
  $arr[] = $x;
  $index = 0;
  
  while ($arr[$index++] != $x);
  
  if ($index < count($arr)) {
  	echo "The value $x found on position " . ($index - 1) . "!";
  } else {
  	echo "The value $x not found!";
  }
?>