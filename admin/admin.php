<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
</head>
<body>
    <nav>
        <h6><a href="../index.php" style="color: white;">Logout</h6></a>
    </nav>
    <header>
        <div class="brand"><a href="#"><h1 style="font-size: 30pt; color: white">JB3</h1></a></div>
    </header>
    <div class="text"><h3>Manage User</h3></div>
    <?php
    include "../koneksi.php";
    $query = "SELECT * FROM tb_user";
    $hasil = mysqli_query($koneksi, $query);
    $jumlah = mysqli_num_rows($hasil);
    ?>


    <div class="list" style="display: flex; justify-content: center;">
        <div class="list-user" style="border-radius: 10px; background-color: #FA4500; padding: 30px 30px 30px 30px; height: auto; width: 800px;">
            <table align="center" border="1" cellspacing="20px" style="border-collapse: ; background-color: #FA4500;">
                <tr>
                    <td style="color: white">No</td>
                    <td style="color: white">Username</td>
                    <td style="color: white">Email</td>
                    <td style="color: white">Manage</td>
                </tr>
                <?php
                $no=1;
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <td><p style="color: white"><?php echo $no++;?><td>
                    <td><p style="color: white"><?php echo $data['username'];?></td>
                    <td><p style="color: white"><?php echo $data['email'];?></td>
                    <td><a href="../delete.php?username=<?php echo $data['username']; ?>" onclick="return confirm('Data akan hilang, apakah anda yakin ?')" style="color: white; text-decoration: none; background-color: black; border: 1px solid black;">BAN</a>
                    <a href="../delete.php?username=<?php echo $data['username']; ?>" onclick="return confirm('Data akan hilang, apakah anda yakin ?')" style="color: black; text-decoration: none; background-color: white; border: 1px solid black;">DELETE</a></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
    
    <footer>
        <div class="brand"><h1 style="font-size: 30pt; color: white; position: absolut; bottom: 0;">JB3</h1></div>
    </footer>
</body>
</html>