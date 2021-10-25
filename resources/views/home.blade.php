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
                    <li><a class="dropdown-item" href="login" style="color: #000">Keluar</a></li>
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
                Selamat Datang di Sistem Informasi Dosen Institut Teknologi Kalimantan
            </a>
            <!-- Button trigger modal -->
            <div class="d-flex align-items-center justify-content-start">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-3">
                        <form action="/tambah-dosen" method="POST">
                        @csrf
                            <label for="formGroupExampleInput" class="form-label">NIP/NIPH</label>
                                <input name="niph" type="text" class="form-control" id="formGroupExampleInput" placeholder="Contoh: 123456789">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Contoh: Achmad Subarjo">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                                <input name="jurusan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Contoh: Matematika dan Teknologi Informasi">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Program Studi</label>
                                <input name="program_studi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Contoh: Informatika">
                            </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <label for="">Pencarian :</label>
                <input width="200" type="text" name="" onkeyup="myFunction()" placeholder="Cari Nama" id="myInput" style="width: 25%" class="form-control">
            </div>
        <table id="myTable" class="table table-striped table-boarderd">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP/NIPH</th>
            <th scope="col">NAMA</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dosen as $ds)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $ds->niph }}</td>
                <td>{{ $ds->nama }}</td>
                <td>{{ $ds->jurusan }}</td>
                <td>{{ $ds->program_studi }}</td>
                <td>
                    <a type="button" class="btn btn-xs btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $ds->id }}">Ubah</a>
                    <a type="button" class="btn btn-danger">Hapus</a>
                </td>   
                    <!-- Modal -->
                <div class="modal fade" id="exampleModal-{{ $ds->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">NIP/NIPH</label>
                                <input type="text" value="{{ $ds->niph }}" class="form-control" id="formGroupExampleInput" placeholder="Ex: 123456789">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Nama Lengkap</label>
                                <input type="text" value="{{ $ds->nama }}" class="form-control" id="formGroupExampleInput2" placeholder="Ex: Achmad Subarjo">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                                <input type="text" value="{{ $ds->jurusan }}" class="form-control" id="formGroupExampleInput2" placeholder="Ex: Matematika dan Teknologi Informasi">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Program Studi</label>
                                <input type="text" value="{{ $ds->program_studi }}" class="form-control" id="formGroupExampleInput2" placeholder="Ex: Informatika">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </div>
                </div>
                </div>
                </td>
        </tr>
        @endforeach
      </tbody>
      </table>
        </div>
        </div>
              </div>
          </div>
      </div>
        
    <!-- footer -->
    <!-- <div class="footer">
        <div class="container">
            Copyright &copy; 2021 - Kelompok 2 IPPL B
        </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
        }
    </script>
</body>
</html>