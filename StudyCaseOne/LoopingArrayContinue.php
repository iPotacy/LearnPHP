<?php

$list = ['a', 'b', 'c', 'd', 'e', 'f'];

for ($i = 0; $i < count($list); $i++)
{

  if ($list[$i] == 'd') 
  {
    continue;
  }
  echo $list[$i];
}

// for($x = 1; $x <= 20; $x++){
//   if($x == 18)
//       break;
//   echo 'Angka '. $x;
// }

?>