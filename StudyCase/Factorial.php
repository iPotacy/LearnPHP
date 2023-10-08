<?php

function factorial(float $n) : int
{
  if ($n <= 1)
  return 1;
  return $n * factorial ($n - 1);
}

echo factorial(7) . PHP_EOL;

?>