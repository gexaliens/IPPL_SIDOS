<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="kampus/img/logo.png">
    <title>Sistem Informasi Dosen (SIDOS)</title>
    <link type="text/css" rel="stylesheet" href="kampus/css/sidos.css">
</head>
<body style="background-color:rgb(255, 255, 255);">
    <img class="bg" src="kampus/img/background.png">
    <div class="container">
        <div class="img">
            <img src="kampus/img/logo.png">
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
            	<a href="home">Pencarian Dosen</a>
            	<button type="submit" name="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="kampus/js/sidos.js"></script>
</html>