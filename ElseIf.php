<?php

$nilai = 90;
$absen = 50;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D, Silahkan Mengulang di Semester Depan" . PHP_EOL;
} else if ($nilai >= 40 && $absen >= 40) {
    echo "Nilai Anda E, Silahkan Mengulang di Semester Depan" . PHP_EOL;
} else {
    echo "Nilai Anda T, Silahkan Mengulang di Semester Depan" . PHP_EOL;
}