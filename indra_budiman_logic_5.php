<?php
function tampilkanMakanan (int $jumlah, int $indeks = 1) {
  if ($indeks < 2){
    echo "Makanan \n";
  }
  echo "Menu makanan ke $indeks \n";
  if ($indeks < $jumlah) {
    tampilkanMakanan($jumlah, $indeks + 1);
  }
}

function tampilkanMinuman (int $jumlah, int $indeks = 1) {
  if ($indeks < 2){
    echo "Minuman \n";
  }
  echo "Menu minuman ke $indeks \n";
  if ($indeks < $jumlah) {
    tampilkanMinuman($jumlah, $indeks + 1);
  }
}

function tampilkanParsel (int $jumlah, int $indeks = 1) {
  if ($indeks < 2){
    echo "Parsel \n";
  }
  echo "Menu parsel ke $indeks \n";
  if ($indeks < $jumlah) {
    tampilkanParsel($jumlah, $indeks + 1);
  }
}
tampilkanMakanan(3);
tampilkanMinuman(3);
tampilkanParsel(3);
?>