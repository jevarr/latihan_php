<?php
$nim = "250030601";
$nama = "Satriayuda Evan Jaya";
$kodeJurusan = "SI";
$angkatan = 2025;
$umur = 20;
$gender = "Laki-laki";
$hobi = ["Bermain game", "Belajar komputer"];

echo "Biodata Mahasiswa<br>";
echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Kode Jurusan: $kodeJurusan<br>";
echo "Angkatan: $angkatan<br>";
echo "Umur: $umur tahun<br>";
echo "Gender: $gender<br>";
echo "Hobi: " . implode(", ", $hobi);
?>
