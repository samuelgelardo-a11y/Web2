<?php
$A = 123; // Variabel Global

function Test() {
    $A = "Test"; // Variabel Lokal
    echo "Nilai A dalam fungsi = $A <br>";
}

Test();
echo "Nilai A luar fungsi = $A";
?>
