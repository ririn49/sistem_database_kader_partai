<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Partai PSI</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- <style>
        body {
            background-color: white;
            color: black;
        }

        .card {
            background-color: whitesmoke;
            color: black;
            border: 1px solid white;
            margin-top: 20px;
        }

        .table {
            color: black;
        }

        .btn {
            color: black;
        }

        nav {
            text-align: end;
            position: fixed;
            z-index: 999;
        }
    </style> -->

    </head>

    <body>
        <?php include_once("template/header.php") ?>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand text-capitalize text-primary" href="#">R3SI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('partai/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('partai/anggota') ?>">Data Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Data Timses</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>List Pengurus</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">List Pengurus</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- card -->
                            <div class="card">
                                <div class="card-header bg-primary">
                                </div>
                                <div class="card-body ">
                                    <div class="container mt-3 pb-3">
                                        <?php if (session()->has('message')) : ?>
                                            <div class="alert alert-success mt-2" role="alert">
                                                <?= session('message') ?>
                                            </div>
                                        <?php endif ?>


                                        <h2 class="text-center text-primary">Nama Pengurus Dari Partai PSI</h2>
                                        <a href="<?= base_url('pengurus/tambah/') ?>" class="btn btn-primary ms-2">+Tambah Data</a>
                                        <div class="table-responsive mt-2">
                                            <table class="table table-bordered table-striped text-center">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Alamat</th>
                                                        <th scope="col">Jabatan</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">No HP</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1 ?>
                                                    <?php foreach ($pengurus as $m) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $no++ ?></th>
                                                            <td><?= $m['nama'] ?></td>
                                                            <td><?= $m['alamat'] ?></td>
                                                            <td><?= $m['jabatan'] ?></td>
                                                            <td><?= $m['email'] ?></td>
                                                            <td><?= $m['no_hp'] ?></td>
                                                            <td><?= $m['gender'] ?></td>
                                                            <td>
                                                                <a href="<?= base_url('pengurus/edit/' . $m['id']) ?>" class="btn btn-warning mr-2">Edit</a>
                                                                <a href="<?= base_url('pengurus/delete/' . $m['id']) ?>" class="btn btn-danger delete-link">Hapus</a>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include_once("template/footer.php") ?>
    </body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteLinks = document.querySelectorAll('.delete-link');

            deleteLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    var confirmation = confirm('Apakah Anda yakin ingin menghapus data partai?');

                    if (confirmation) {
                        window.location.href = link.href;
                    } else {
                        console.log('Penghapusan dibatalkan.');
                    }
                });
            });
        });
    </script>

    </html>
</body>

</html>