<?php
include "config.php";
session_start();
if(isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $sql = "select * from login where Email = '$Email' and Password = '$Password'";
    $conn = mysqli_query($koneksi, $sql);
    $jawaban = mysqli_num_rows($conn);
    if ($jawaban > 0) {
        $data = mysqli_fetch_array($conn);
        $_SESSION['Email'] = $data['Email'];
        echo "<script type = 'text/javascript'>alert('LOGIN BERHASIL'); window.location = 'index.php'</script>";
    } else {
        echo "<script type = 'text/javascript'>alert('LOGIN GAGAL!'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="style.css" />

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<title>Data Karyawan</title>
	</head>
<body style = "background-color : white">
        <div class="container" id="login">
			<div class="card">
				<div class="card-body">
					<h4 class="text-center" style="color: black">Data Karyawan</h4>
					<form method="post" action="">
					
						<div class="mb-3 mt-3">
							<label for="Email" class="form-label">Email</label>
							<input type="Email" class="form-control" id="Email" aria-describedby="EmailHelp" name="Email" required />
						</div>
						<div class="mb-3">
							
							<label for="Password" class="form-label">Password</label>
							<input type="Password" class="form-control" id="Password" name="Password" required />
							<div id="EmailHelp" class="form-text">Masukkan Password yang sesuai</div>
						</div>
						<div id="button">
							<button type="submit" class="btn btn-primary" style="color: #fbfbfb; background-color: #be768d" name="login">Masuk</button>
						</div>
						<div id="button">
							<a href="daftar.php">Daftar</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		<footer class="container" id="footer">20191040035 - SEKAR PUTRI RETNO</footer>
		
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>