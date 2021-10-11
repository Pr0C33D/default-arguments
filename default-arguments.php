<?php 
// https://www.codewars.com/kata/57d0fad6eca26073c3000023
function multiply_with_defaults($a = 1, $b = 1){
  return $a*$b;
}
function circle_area($a = 1){
  return $a**2*pi();
}
function prank_replace($a, $b = 'hello', $c = 'goodbye'){
  return str_replace($b, $c, $a);
}
?>