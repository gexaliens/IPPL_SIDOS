<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Dosen</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color:rgb(255, 255, 255);">
    <img class="bg" src="img/background.png">
    <!-- navigasi bar -->
    <div class="navbar">

        <div class="container">
            
            <!-- navbar brand -->
            <h2 class="nav-brand float-left">Sistem Informasi Dosen (SIDOS)</h2>

            <!-- navbar menu-->
            <ul class="nav-menu float-left">
                <li><a href="index.php">Dashboard</a></li>
                
                <?php if($_SESSION['ulevel'] == 'Super Admin'){?>

                    <li><a href="pengguna.php">Pengguna</a></li>
                    
                <?php } elseif($_SESSION['ulevel'] == 'Admin'){ ?>
                <li><a href="jurusan.php">Jurusan</a></li>
                <li><a href="prodi.php">Program Studi</a></li>
                <li>
                    <a href="">Pengaturan<i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="identitas.php">Identitas ITK</a></li>
                        <li><a href="tentang.php">Tentang ITK</a></li>
                        <li><a href="rektor.php">Rektor ITK</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li>
                    <a href="">Akun<i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="ubah-password.php">Ubah Password</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>

            <div class="clearfix"></div>
        </div>

        <!-- konten -->
        <div class="content">

            <div class="container">

                <div class="box-header">
                    Dashboard
                </div>

                <div class="box-body">
                    <h3>Selamat Datang <?= $_SESSION['uname']?> di SIDOS buatan anak-anak didikan Pak Nur Fajri Azhar</h3>
                </div>
            </div>
        </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            Copyright &copy; 2021 - Kelompok 2 IPPL B
        </div>
    </div>
</body>
</html>