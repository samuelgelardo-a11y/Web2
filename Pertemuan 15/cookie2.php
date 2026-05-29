<?php
session_start();

/*
|--------------------------------------------------------------------------
| Pemeriksaan Cookies
|--------------------------------------------------------------------------
*/

if (isset($_COOKIE['username'])) {

    echo "<h1>
    Cookie 'username' ada. Isinya :
    " . $_COOKIE['username'] . "
    </h1>";

} else {

    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}


if (isset($_COOKIE['namalengkap'])) {

    echo "<h1>
    Cookie 'namalengkap' ada. Isinya :
    " . $_COOKIE['namalengkap'] . "
    </h1>";

} else {

    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}


/*
|--------------------------------------------------------------------------
| Link Cookies
|--------------------------------------------------------------------------
*/

echo "<h2>
Klik <a href='cookie1.php'>di sini</a>
untuk penciptaan cookies
</h2>";

echo "<h2>
Klik <a href='cookie3.php'>di sini</a>
untuk penghapusan cookies
</h2>";



/*
|--------------------------------------------------------------------------
| Pemeriksaan Session
|--------------------------------------------------------------------------
*/

if (isset($_SESSION['login'])) {

    echo "<hr>";

    echo "<h1>
    Selamat Datang " . $_SESSION['login'] . "
    </h1>";

    echo "<h2>
    Halaman ini hanya bisa diakses jika Anda sudah login
    </h2>";

    echo "<h2>
    Klik <a href='session3.php'>
    di sini (session3.php)
    </a> untuk LOGOUT
    </h2>";

} else {

    die("
    <h2>
    Anda belum login!
    </h2>

    <p>
    Anda tidak berhak masuk ke halaman ini.
    </p>

    <a href='session1.php'>Login di sini</a>
    ");
}

?>
