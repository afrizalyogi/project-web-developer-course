<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Pendataan Peserta | by Afrizal Yogi Pratama</title>
</head>
<body>
    <header>
        <h1>Pendataan Peserta</h1>
        <p>Website Pendataaan Peserta Pelatihan Junior Web Developer</p>
        <a href="#form">
            <button>Masukan Data</button>
        </a>
    </header>
    <section id="form">
        <form method="post" action="userdata.php">
            <p>Nama Peserta</p>
            <input type="text" name="name">
            <br>
            <p>Email</p>
            <input type="email" name="email">
            <br>
            <p>Tanggal Lahir</p>
            <input type="date" name="date">
            <br>
            <p>Asal Kota</p>
            <input type="text" name="dom">
            <br><br>
            <input id="submit" type="submit" name="submit" value="DAFTAR"> 
        </form>
    </section>
    <footer>Made by Afrizal Yogi Pratama</footer>
</body>
</html>