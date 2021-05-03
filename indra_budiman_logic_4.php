<?php
function tampilkanAngka (int $jumlah, int $indeks = 1) {
    if ($indeks % 2 == 0){
        $cek = "Genap";
    } else {
        $cek = "Ganjil";
    }
    echo "$indeks. Bilangan $cek \n";
    if ($indeks < $jumlah) {
      tampilkanAngka($jumlah, $indeks + 1);
    }
  }
  tampilkanAngka(10);  
?>