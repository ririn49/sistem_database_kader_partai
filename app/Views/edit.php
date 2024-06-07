<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Data Tim</title>
    <!-- <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang body */
        }

        .container {
            margin-top: 50px;
        }

        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .btn-primary {
            width: auto;
        }
    </style> -->
</head>

<body>
    <?php include_once('template/header.php')  ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Anggota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Data Anggota</li>
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
                                    <h2 class="text-center text-primary mb-4">Edit Data Anggota</h2>
                                    <form action="<?= base_url('/partai/update/' . $par['nik']) ?>" method="POST">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input value="<?= $par['nama'] ?>" type="text" name="nama" class="form-control" placeholder="Nama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input value="<?= $par['nik'] ?>" type="number" name="nik" class="form-control" placeholder="NIK" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input value="<?= $par['alamat'] ?>" type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rt" class="form-label">RT</label>
                                            <input value="<?= $par['rt'] ?>" type="number" name="rt" class="form-control" placeholder="RT" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rw" class="form-label">RW</label>
                                            <input value="<?= $par['rw'] ?>" type="number" name="rw" class="form-control" placeholder="RW" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_tps" class="form-label">NO.TPS</label>
                                            <input value="<?= $par['no_tps'] ?>" type="number" name="no_tps" class="form-control" placeholder="NO.TPS" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_once('template/footer.php')  ?>
</body>

</html>