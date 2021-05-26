<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud SBDL</title>
    <link href="https://media.bitdegree.org/storage/media/images/2018/12/node-js-interview-questions-logo-2-266x300.png" rel="icon" type="image/gif" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
            <a href="#" class="navbar-brand" style="color:white;">
                <span class="brand-text font-weight-light">Sistem Basis Data Lanjut</span>
            </a>
            </div>
        </nav>
        
        <div class="card mt-3">
            <div class="card-header bg-white">
                Tambah Data Mahasiswa
                <a href="index.php" style="float:right;" role="button" class="btn btn-success btn-sm"><i class="fas fa-undo-alt"></i> Kembali</a>
            </div>
            <div class="card-body">
            <form action="./php/Proses.php?tambah" method="POST">
                    <div class="row mb-3">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim_anggota" name="nim_anggota" required placeholder="Masukkan Nim">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" required placeholder="Masukkan Nama">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" required name="jurusan">
                                <option selected value="">- Pilih Jurusan -</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Manajemen">Manajemen</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin_anggota" id="exampleRadios1" value="L" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin_anggota" id="exampleRadios2" value="P">
                                <label class="form-check-label" for="exampleRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="notelp_anggota" required placeholder="Masukkan No Hp">
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <button type="submit" class="btn btn-primary text-white" style="float:right;"><i class="fas fa-plus"></i> Tambah</button>
                </div>
            </form>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if(isset($_GET['sukses'])): ?>
<script>swal("Berhasil Tambah Data");</script>
<?php endif; ?>
</html>