<?php
$totalToko = 100;
$biayaAwal = 10000;
$selisihBiayaAntarToko = (30100-10000)/67;
$biayaTokoKe81 = ($biayaAwal + ((81-1) * $selisihBiayaAntarToko));
echo "pengeluaran toko kelontong ke 81 sebesar " . $biayaTokoKe81 . " rupiah"
?>