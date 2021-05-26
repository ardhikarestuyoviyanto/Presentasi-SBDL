<?php
    require_once('php/Proses.php');
?>
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
                Data Mahasiswa
                <a href="tambah.php" style="float:right;" role="button" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i> Tambah</a>
            </div>
            <div class="card-header bg-white">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                    <div class="mb-3 mt-3 row">
                        <div class="col">
                            <input type="text" name="search" class="form-control form-control-sm" placeholder="Tuliskan Nama / NIM / Jurusan" required <?php if(isset($_GET['search'])): ?> value="<?php echo $_GET['search']; ?>" <?php endif; ?>>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                            <a id="reset" type="button" class="btn btn-success btn-sm">Reset</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
            <div class="overflow-auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; if(!empty($PublicProses->LihatData()) && empty($_GET['search'])): ?>
                        <?php foreach ($PublicProses->LihatData() as $x): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $x->nim_anggota; ?></td>
                            <td><?= $x->nama_anggota; ?></td>
                            <td><?= $x->jurusan; ?></td>
                            <td><?= $x->jeniskelamin_anggota; ?></td>
                            <td><?= $x->notelp_anggota; ?></td>
                            <td>
                                <a onclick="return confirm('Yakin Mau Menghapus Data Ini ? ')" href="./php/Proses.php?hapus&id_anggota=<?php echo $x->id_anggota; ?>"><span class="badge bg-danger"><i class="fas fa-user-times"></i></span></a> 
                                <a href="edit.php?id=<?php echo $x->id_anggota; ?>"><span class="badge bg-primary"><i class="fas fa-user-edit"></i></span></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        
                        <?php if(isset($_GET['search'])): ?>
                        <?php $i = 1; if(!empty($PublicProses->PencarianData(urldecode($_GET['search'])))): ?>
                        <?php foreach ($PublicProses->PencarianData(urldecode($_GET['search'])) as $x): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $x->nim_anggota; ?></td>
                            <td><?= $x->nama_anggota; ?></td>
                            <td><?= $x->jurusan; ?></td>
                            <td><?= $x->jeniskelamin_anggota; ?></td>
                            <td><?= $x->notelp_anggota; ?></td>
                            <td>
                                <a onclick="return confirm('Yakin Mau Menghapus Data Ini ? ')" href=""><span class="badge bg-danger"><i class="fas fa-user-times"></i></span></a> 
                                <a href="edit.php?id=<?php echo $x->id_anggota; ?>"><span class="badge bg-primary"><i class="fas fa-user-edit"></i></span></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <?php endif; ?>
                        

                    </tbody>
                </table>
                </div>

            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script>
    $('#reset').click(function(e){
        e.preventDefault();
        location.href='index.php';
    })
</script>

</html>