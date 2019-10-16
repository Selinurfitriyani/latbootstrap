<?php 
// menambah / memanggil file database.php
include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Read Data</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SELI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="create.php">formulir <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <center>MY BIODATA</center>
    <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
    </tr>
  </thead>
        <?php
            $formulir = new formulir();
            $no = 1;
            foreach($formulir->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tanggal_lahir']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm ('apakah anda yakin mau menghapus data ini ?');">Delete</a></td>
        </tr>
        <?php }?>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>