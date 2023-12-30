<?php

// Minta pengguna untuk memasukkan baris bilangan
echo "Masukkan baris bilangan (pisahkan dengan spasi): ";
$input = trim(fgets(STDIN));

// Pisahkan baris bilangan menjadi array
$bilanganArray = explode(' ', $input);

// Hitung jumlah bilangan bulat
$jumlahBilanganBulat = hitungBilanganBulat($bilanganArray);

echo "Jumlah bilangan bulat dalam baris tersebut adalah: $jumlahBilanganBulat\n";

// Fungsi untuk menghitung jumlah bilangan bulat
function hitungBilanganBulat($bilanganArray) {
    $jumlahBilanganBulat = 0;

    foreach ($bilanganArray as $bilanganStr) {
        // Coba mengonversi string ke bilangan bulat
        $bilangan = intval($bilanganStr);

        // Jika konversi berhasil, tambahkan ke jumlah bilangan bulat
        if (is_int($bilangan)) {
            $jumlahBilanganBulat += $bilangan;
        }
    }

    return $jumlahBilanganBulat;
}
?>
