<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

    <link rel="stylesheet" href="css/daftar.css">
</head>
<body>
    <div class="bagian">
        <div class="text">
            <h1 style="font-size: 50pt; color: white;">JB3</h1>
            <h6 style="font-size: 20pt; color: white;">Tempat Jual Beli Barang Bekas</h6>
        </div>
        <div class="login">
            <form action="daftarr.php" method="POST">
                <h1 style="text-align: center;">Daftar</h1>
                <div class="isi">
                    <input type="email" name="email" id="email" placeholder="EMAIL">
                </div>
                <div class="isi">
                    <input type="username" name="username" id="username" placeholder="USERNAME">
                </div>
                <div class="isi">
                    <input type="password" name="password" id="password" placeholder="PASSWORD">
                </div>
                <div class="daftar">
                    <input type="submit" name="submit" value="DAFTAR">
                </div>
            </form>

        </div>
    </div>
</body>
</html>

