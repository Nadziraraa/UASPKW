<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <title>Data Karyawan</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Daftar Karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="create.php">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
        while ($data = mysqli_fetch_assoc($karyawan)){
        ?>
            <div class="container mt-5">
                <p><a href="karyawan.php">Home</a> / Edit Karyawan / <?php echo $data['nama'] ?></p>
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Profil Karyawan</p>
                    </div>
                    <div class="card-body fw-bold">
                    <form method="post" action="update.php">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="no_ktp" class="form-label">No KTP</label>
                                <input type="text" class="form-control" id="no_ktp" placeholder="Masukkan No KTP karyawan" name="no_ktp" value="<?php echo $data['no_ktp']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan" name="nama" value="<?php echo $data['nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="no_tlp" class="form-label">No Telpon</label>
                                <input type="text" class="form-control" id="no_tlp" placeholder="Masukkan No Telpon Karyawan" name="no_tlp" value="<?php echo $data['no_tlp']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="thn_msk" class="form-label">Tahun Masuk</label>
                                <input type="text" class="form-control" id="thn_msk" placeholder="Masukkan Tahun Masuk Karyawan" name="thn_msk" value="<?php echo $data['thn_msk']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="jml_masa_krj" class="form-label">Jumlah Masa Kerja</label>
                                <input type="text" class="form-control" id="jml_masa_krj" placeholder="Masukkan Jumlah Masa Kerja" name="jml_masa_kerja" value="<?php echo $data['jml_masa_krj']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>