<!doctype html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"> 
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
        <a class="nav-link" href="login.php">Login</a> 
      </div> 
    </div> 
  </div> 
  </nav> 
 
  <div class="container data-karyawan mt-5"> 
    <!-- Button trigger modal --> 
 
  <!-- Modal --> 
  <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDatalabel" aria-hidden="true"> 
    <div class="modal-dialog"> 
      <div class="modal-content"> 
       <form action="create.php" method="post" name="form" > 
          <div class="modal-header"> 
            <h5 class="modal-title" id="tambahDatalabel">Input Data</h5> 
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
          </div> 
          <div class="modal-body"> 
            <div class="mb-3"> 
              <label for="Nama" class="form-label">Nama</label> 
              <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Karyawan" name="Nama"> 
            </div> 
            <div class="mb-3"> 
              <label for="NoKTP" class="form-label">Nomor KTP</label> 
              <input type="text" class="form-control" id="NoKTP" placeholder="Masukkan Nomor KTP Karyawan" name="NoKTP"> 
            </div> 
            <div class="mb-3"> 
              <label for="NoTelpon" class="form-label">Nomor Telepon</label> 
              <input type="text" class="form-control" id="NoTelpon" placeholder="Masukkan Nomor Telpon Karyawan" name="NoTelpon"> 
            </div> 
            <div class="mb-3"> 
              <label for="TahunMasuk" class="form-label">Tahun Masuk</label> 
              <<input type="text" class="form-control" id="TahunMasuk" placeholder="Masukkan Tahun Masuk Karyawan" name="TahunMasuk"> 
            </div> 
           
          </div> 
          <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
            <button type="submit" class="btn btn-primary">Input</button> 
          </div> 
        </form> 
      </div> 
    </div> 
  </div> 
 
 
  <div class="container data-karyawan mt-5"> 
    <table class="table table-striped" id="karyawan"> 
        <thead> 
            <tr> 
                <th scope="col">No. </th> 
                <th scope="col">Nama</th> 
                <th scope="col">No.KTP</th> 
                <th scope="col">No.Telepon</th> 
                <th scope="col">Tahun Masuk</th> 
                <th scope="col">Jumlah Masa Kerja</th> 
            <tr> 
        </thead> 
        <tbody> 
            <?php 
                include 'config.php'; 
                $no = 1; 
                $karyawan = mysqli_query($koneksi, "select * from karyawan"); 
                while($data = mysqli_fetch_array($karyawan)){ 
                    ?> 
                      <tr> 
                        <td><?php echo $no++; ?></td> 
                        <td><?php echo $data['Nama']; ?></td> 
                        <td><?php echo $data['NoKTP']; ?></td>
                        <td><?php echo $data['NoTelpon']; ?></td> 
                        <td><?php echo $data['TahunMasuk']; ?></td> 
                        <td><?php echo $data['JumlahMasaKerja']; ?> Tahun</td> 
                      </tr> 
                      <?php 
                    } 
                    ?> 
                </tbody> 
                </table> 
            </div>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>     
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script> 
        <script> 
          $(document).ready(function() { 
            $('#karyawan').DataTable(); 
          } ); 
        </script> 
  </body> 
</html>