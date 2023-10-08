<?php

class Personal
{
  public $nama;
  public $umur;

  public function __construct($nama, $umur)
  {
      $this->nama = $nama;
      $this->umur = $umur;
  }
  public function printOut()
  {
      echo "ini nama saya : " . $this->nama . " ini umur saya : " .$this->umur;
  }
}

$personal = new personal ('Hadi', 20);
// echo $personal->nama; // Output: Hadi
$personal->printOut();

?>
