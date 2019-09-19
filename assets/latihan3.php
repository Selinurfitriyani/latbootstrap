<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assalam Book Store</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

</head>
<body>
    <!-- Header --> 

    <!-- Required meta tags --> 

    <!-- end header -->

    <!-- content -->
    <div class="alert alert-primary" role="alert">
    Assalam Book Store
   <div class="container">
         <div class="row" style="padding:20px;">
           <div class ="col-md-12">
              <div class="card">
                <div class ="card-header">Assalam Book Store</div>
                  <div class="card-body">
                  <!-- Isi Disini -->
                  <form action="" method ="post">
                      <div class="form-grup">
                      <label for="">Nama</label>
                      <input type="text" name="nama" class="form-control">
                      </div>
                       <div class="form-group">
                       <label for="">Alamat</label>
                       <textarea name="alamat" class="form-control" rows="5"></textarea>
                       </div>
                       <div class="form-group">
                       <label for="">Jenis Kelamin</label>
                       <br>
                       <label><input type="radio" name="jk" value="laki-laki">laki-laki</label>
                       <label><input type="radio" name="jk" value="perempuan">perempuan</label>
                       </div>
                       <div class="form-grup">
                      <label for="">Tanggal Pembelian</label>
                      <input type="date" name="tgl" class="form-control">
                      </div>
                      <div class="form-grup">
                      <label for="">Jumlah Buku</label>
                      <input type="number" name="jmlh" class="form-control">
                      </div>
                      <br>
                         <div class="form-group">
                         <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                         <button type="reset" class="btn btn-warning">Reset</button>
                         </div>
                    </form>
                    <?php
                    if (isset($_POST['simpan'])) {
                        $a=$_POST['nama'];
                        $b=$_POST['alamat'];
                        $c=$_POST['jk'];
                        $d=$_POST['tgl'];
                        $e=$_POST['jmlh'];
                        
                    }
                    ?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
       </div>
    </div>
    <!-- end content -->
        <!-- js -->
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>