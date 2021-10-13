<?php
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>Sistem Informasi Dosen</title>
    <link type="text/css" rel="stylesheet" href="css/sidos.css">
</head>
<body style="background-color:rgb(255, 255, 255);">
    <img class="bg" src="img/background.png">
    <div class="container">
        <div class="img">
            <img src="img/logo.png">
        </div>
        <div class="login-content">
			<form action="" method="POST">
				<h2 class="title">Masuk</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>NIDN/NIDK</h5>
           		   		<input type="text" name= "user" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pass" class="input">
            	   </div>
            	</div>
            	<a href="#">Lupa Password?</a>

            	<input type="submit" name="submit" class="btn" value="Login">
            </form>

            <?php
                if(isset($_POST['submit'])){
                    $user= mysqli_real_escape_string($conn, $_POST['user']);
					$pass= mysqli_real_escape_string($conn, $_POST['pass']);

					$cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."'");
					if(mysqli_num_rows($cek) > 0){
						$d = mysqli_fetch_object($cek);
						if(md5($pass) == $d->password){
							$_SESSION['status_login'] 	= true;
							$_SESSION['uid'] 			= $d->id;
							$_SESSION['uname'] 			= $d->nama;
							$_SESSION['ulevel'] 		= $d->level;

							echo "<script>window.location = 'index.php'</script>";
						}else{
							echo '<div class="alert">Password salah</div>';
						}
					}else{
						echo '<div class="alert">Username tidak ada</div>';
					}
                }

            ?>
        </div>
    </div>
    <script type="text/javascript" src="js/sidos.js"></script>
</html>