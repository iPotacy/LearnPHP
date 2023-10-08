<?php

function fibonacci (int $n) : int
{
  if ($n == 1)
  return 0;
  if ($n === 2)
  return 1;
  return fibonacci($n - 1) + fibonacci($n - 2);
}

for ($i = 1; $i < 10; $i++)
{
  echo fibonacci($i) . ',';
}

echo PHP_EOL;

?>