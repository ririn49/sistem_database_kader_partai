<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Input Partai</title>
    <!-- <style>
        body {
            background: url('<?= base_url('assets/PSI.jpeg') ?>') no-repeat center center fixed;
            background-size: cover;

        }


        .container {
            margin-top: 50px;
        }

        .card {
            background: url('/assets/PSI.jpeg') no-repeat center center fixed;
            background-size: cover;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 60px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        input {
            margin-bottom: 10px;
        }

        button {
            width: 100%;
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
                        <h1>Input Data Anggota</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Input Data Anggota</li>
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
                                    <h2 class="text-center mb-4">Form Input Data Anggota</h2>
                                    <form action="<?= base_url('/partai/simpan') ?>" method="POST" id="exampleModalLabel">
                                        <input type="text" name="nama" class="form-control mt-3" placeholder="Nama" required>
                                        <input type="text" name="alamat" class="form-control mt-3" placeholder="Alamat" required>
                                        <input type="number" name="rt" class="form-control mt-3" placeholder="RT" required>
                                        <input type="number" name="rw" class="form-control mt-3" placeholder="RW" required>
                                        <input type="number" name="nik" class="form-control mt-3" placeholder="NIK" required>
                                        <input type="number" name="no_tps" class="form-control mt-3" placeholder="No TPS" required>
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>