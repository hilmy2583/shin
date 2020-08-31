<?php
class produk{
  public $namaBarang,
          $merk,
          $harga;

  public function getcetak(){
    return "$this->namaBarang, $this->merk, $this->harga";
  }
  public function __construct($namaBarang="Nama Barang", $merk="Merk", $harga=0){
    $this->namaBarang=$namaBarang;
    $this->merk=$merk;
    $this->harga=$harga;
  }
}

$produk1 = new produk("Idepad","Lenovo",7000000);
$produk2 = new produk("Flashdisk","Sandisk",1000000);
$produk3 = new produk("Macbook","Apple",25000000);
$produk4 = new produk("Mouse","Logitech",1200000);

echo"Nama Barang Laptop : " .$produk1->getcetak();
echo "<br>";
echo"Nama Barang Aksesoris : " .$produk2->getcetak();
echo "<br>";
echo"Nama Barang Laptop : " .$produk3->getcetak();
echo "<br>";
echo"Nama Barang Aksesoris : " .$produk4->getcetak();
?>
