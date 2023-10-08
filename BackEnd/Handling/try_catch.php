<?php

try 
{  
  // Kode yang mungkin menyebabkan kesalahan
  // $result = 10 / 0; // ini akan memunculkan exception
}
catch (Exception $e)
{
  // Tangani kesalahan disini
  echo "Error: " . $e->getMessage();
}