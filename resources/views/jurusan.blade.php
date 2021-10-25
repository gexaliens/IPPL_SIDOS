<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="kampus/img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Dosen (SIDOS) ITK</title>
    <link rel="stylesheet" type="text/css" href="kampus/css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color:rgb(255, 255, 255);">
    <img class="bg" src="kampus/img/background.png">  
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #72a3a8">
    <div class="container">
        <a class="navbar-brand" style="color: #fff; font-weight: bold;">
            Sistem Informasi Dosen (SIDOS) ITK
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="home" style="color: #fff">Dashboard</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="jurusan" style="color: #fff">Jurusan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="prodi" style="color: #fff">Program Studi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #fff" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                    <li><a class="dropdown-item" href="#" style="color: #000">Tentang Program</a></li>
                    <li><a class="dropdown-item" href="#" style="color: #000">Tentang ITK</a></li>
                    <li><a class="dropdown-item" href="#" style="color: #000">Rektor ITK</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #fff" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Akun
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                    <li><a class="dropdown-item" href="#" style="color: #000">Ubah Password</a></li>
                    <li><a class="dropdown-item" href="#" style="color: #000">Keluar</a></li>
                </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>

      <div class="container my-5">
          <div class="row">
              <div class="col-md-12">
              <div class="card">
        <div class="card-body">
            <img src="kampus/img/logo.png" alt="" width="80">
            <a style="font-weight: bold;">
                Jurusan
            </a>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <label for="">Pencarian :</label>
                <input width="200" type="text" name="" onkeyup="myFunction()" placeholder="Cari Jurusan" id="myInput" style="width: 25%" class="form-control">
            </div>
<thead>
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Dropdown button
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
    </div>
</thead>
</div>
</body>
</html>