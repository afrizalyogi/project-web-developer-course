<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Pendataan Berhasil | by Afrizal Yogi Pratama</title>
</head>
<body>
<?php
/* Percabangan untuk mengecek apakah user sudah memasukan semua data yang dibutuhkan
    Jika user telah mengisi semua data, maka data tersebut akan ditampilkan kembali */
if (empty($_POST["name"])) {
    echo "<header>";
    echo "<h1>Silahkan Masukan Nama Anda!";
    echo "<p></p>";
    echo "<a href='index.php'><button>Kembali</button></a>";
    echo "</header>";
}
elseif (empty($_POST["email"])) {
    echo "<header>";
    echo "<h1>Silahkan Masukan Email Anda!";
    echo "<p></p>";
    echo "<a href='index.php'><button>Kembali</button></a>";
    echo "</header>";
}
elseif (empty($_POST["date"])) {
    echo "<header>";
    echo "<h1>Silahkan Masukan Tanggal Lahir Anda!";
    echo "<p></p>";
    echo "<a href='index.php'><button>Kembali</button></a>";
    echo "</header>";
}
elseif (empty($_POST["dom"])) {
    echo "<header>";
    echo "<h1>Silahkan Masukan Asal Anda!";
    echo "<p></p>";
    echo "<a href='index.php'><button>Kembali</button></a>";
    echo "</header>";
}
else {
    echo "<header>";
    echo "<h1>Selamat ". $_POST["name"]. "!</h1>";
    echo "<p>Anda sudah terdaftar pada pelatihan Junior Web Developer. Silahkan cek email yang sudah didaftarkan secara berkala.</p>";
    echo "<a href='index.php'><button>Kembali</button></a>";
    echo "</header>";
    echo "<section id='form'>";
    echo "<form>";
    echo "<p>Nama: ".$_POST["name"]. "</p>";
    echo "<p>Email: ".$_POST["email"]. "</p>";
    echo "<p>Tanggal Lahir: ".$_POST["date"]. "</p>";
    echo "<p>Asal: ".$_POST["dom"]. "</p>";
    echo "</form>";
    echo "</section>";
    echo "<footer>Made by Afrizal Yogi Pratama</footer>";
}
?>
</body>
</html>