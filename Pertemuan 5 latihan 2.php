<?php
// Array pertama
$x = array("one","two","three");

echo "Isi array x:\n";
foreach ($x as $value) {
    echo $value . "\n";
}

echo "\n";

// Array kedua
$b = array(
    "sayur" => "wortel",
    "daging" => "ayam",
    "utama" => "nasi"
);

$jumlah = count($b);

echo "Isi array b:\n";
foreach ($b as $key => $value) {
    echo $key . " : " . $value . "\n";
}

echo "\nJumlah array b = $jumlah";
?>
