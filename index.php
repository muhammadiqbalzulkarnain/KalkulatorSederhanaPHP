<?php
function validasiDataDigit($pesan) {
    $cekData = readline($pesan);

    if (!ctype_digit($cekData)) {
        echo "Tidak Bisa Selain Bilangan Bulat";
        exit;
    }

    return $cekData;
}

$angkaPertama = validasiDataDigit("Masukkan Angka Pertama : ");
$operator = readline("Masukkan Operator (+, -, *, /, %) : ");
$validasiOperator = ["+", "-", "*", "/", "%"];
if (!in_array($operator, $validasiOperator, true)) {
    echo "Operator tidak Tersedia" . PHP_EOL;
    exit;
}
$angkaKedua = validasiDataDigit("Masukkan Angka Kedua : ");

$hasil = fn() => match ($operator) {
    "+" => $angkaPertama + $angkaKedua,
    "-" => $angkaPertama - $angkaKedua,
    "*" => $angkaPertama * $angkaKedua,
    "/" => $angkaPertama / $angkaKedua,
    "%" => $angkaPertama % $angkaKedua
};

echo "Hasil : " . $hasil() . PHP_EOL;
?>