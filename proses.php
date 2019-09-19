<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>proses</title>
     <!-- Bootstrap css -->
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
     <!-- As a heading -->
     <nav class="navbar navbar-light bg-light">
     <span class="navbar-brand mb-0 h1">Stor Book:)</span>
     </nav>
    <!-- end header -->

    <!-- countent -->
            <center>
             <h2>Assalam Book Store</h2>
             </center>
             <div class="container">
               <div class="row justify-counten-start">
                 <div class ="col-md-12">
                   <div class="card border-primary">
                      <div class="card-header">Invoice Pembayaran</div>

                         <div class="card-body">
                         <?php 
                           if (isset($_POST['simpan'])) {
                               $nama = $_POST['nama'];
                               $alamat = $_POST['alamat'];
                               $jk = $_POST['jk'];
                               $tgl_beli = ['tgl'];

                               $judul = $_POST['judul'];
                               $kodebuku = $_POST['kb'];
                               $pengarang = $_POST['pengarang'];
                               $jenisbuku = $_POST['jenisbuku'];
                               $hargabuku = $_POST['hb'];
                           }?>

                                    <div class="table-responsive">
                                    <table class="table">
                                    <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah</th>
                                    </tr>
                                     <tr>
                                     <td>1</td>
                                     <td><?php echo $nama;?></td>
                                     <td><?php echo $alamat;?></td>
                                     <td><?php echo $jk;?></td>
                                     <td><?php echo $tgl;?></td>
                                     </td>
                                   </tr>
                               </table>
                            </div>
                         </div>
                    </div>
                  </div>
               </div>
             </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>