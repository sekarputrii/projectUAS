<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Karyawan</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Data Karyawan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
      </div>
    </div>
  </div>
  </nav>

  <?php
  include 'config.php';
  $id = $_GET['id'];
  $karyawan = mysqli_query($koneksi, "select * from karyawan where id ='$id'");

  while($data = mysqli_fetch_assoc($karyawan)){
  ?>
    <div class="container mt-5">
        <p><a href="index.php">Home</a> / Edit Karyawan / <?php echo $data['Nama'] ?></p>
        <div class="card">
            <div class="card-header">
                <p class="fw-bold">Profil Karyawan</p>
            </div>
            <div class="card-body fw-bold">
                <form  method="post" action="update.php">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="NoKTP" value="<?php echo $data['NoKTP']; ?>">
                    </div> 
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Karyawan" name="Nama" value="<?php echo $data['Nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="NoKTP" class="form-label">NoKTP</label>
                        <input type="text" class="form-control" id="NoKTP" placeholder="Masukkan No. KTP" name="NoKTP" value="<?php echo $data['NoKTP']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="NoTelpon" class="form-label">NoTelpon</label>
                        <input type="text" class="form-control" id="NoTelpon" placeholder="Masukkan No. Telpon" name="NoTelpon" value="<?php echo $data['NoTelpon']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="TahunMasuk" class="form-label">Tahun Masuk</label>
                        <input type="text" class="form-control" id="TahunMasuk" placeholder="Masukkan Tahun Masuk" name="TahunMasuk" value="<?php echo $data['TahunMasuk']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="JumlahMasaKerja" class="form-label">Jumlah masa kerja</label>
                        <input type="text" class="form-control" id="JumlahMasaKerja" placeholder="Masukkan Jumlah Masa Kerja" name="JumlahMasaKerja" value="<?php echo $data['JumlahMasaKerja']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" values="SIMPAN">Update</button>
                </form>
            </div>
        </div>
    </div>
  <?php
  }
  ?>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>