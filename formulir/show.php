<?php 
include '../database.php';
$siswa = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
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
        <a class="nav-link" href="proses.php">formulir <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tanggal_lahir = $data['tanggal_lahir'];
            $jenis_kelamin = $data['jk'];
            $agama = $data['agama'];
            $umur = $data['umur'];
        }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tanggal_lahir" readonly><?php echo $tanggal_lahir; ?></td>
                </tr>
                <tr>
                    <label for="">Jenis Kelamin</label>
                    <input type="radio" name="jk" value="Laki - Laki" readonly><?php echo $jk; ?>Laki - Laki</input>
                    <input type="radio" name="jk" value="Perempuan">Perempuan</input>
                </tr>
                <tr>
                    <td valign="Top">Agama</td>
                    <td>
                    <select name="agama" class="required" title="harus diisi"readonly><?php echo $agama; ?></select>
                    <option value="">pilih agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    </td>
                </tr>
        </table>
    </fieldset>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>