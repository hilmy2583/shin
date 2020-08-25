<?php

class produk{
  public $namaBarang, $merk, $harga;

  public function sayHalo(){
    return "Saya Hilmy<br/>";
  }
  public function cetakBarang(){
    return "Saya membeli ponsel courage, seharga Rp 2.000.000,00<br/>";
  }
}
$produk1 = new produk();
echo $produk1->sayHalo();
echo $produk1->cetakBarang();
?>