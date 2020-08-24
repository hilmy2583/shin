# Muhammad Hilmy
# RPL XI-3
# Cibedug 2

tugas produktif

<?php

class hewan{
        var $nama;
        var $jenis;

        function nama_hewan(){
            return "Hewan itu adalah Gajah<br/>";
        }
        function jenis_hewan(){
            return "Hewan itu berjenis mamalia/menyusui/melahirkan<br/>";
        }

$hewan = new hewan();
echo $hewan->nama_hewan();
echo $hewan->jenis_hewan();

}

?>
