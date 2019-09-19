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

    <!-- end header -->

    <!-- content -->
    <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Stor Book:)</span>
</nav>
    <form action ="proses.php" method="post">
   <div class="container">
         <div class="row" style="padding:20px;">
           <div class ="col-md-12">
             <center>
             <h2>Assalam Book Store</h2>
             </center>    
                <div class ="card-header">Pembelian Buku</div>
                  <div class="card-body">
                  <!-- Isi Disini -->
                  <form action="" method ="post">
                      <div class="form-grup">
                      <label for="">Judul</label>
                      <input type="text" name="judul" class="form-control">
                      </div>
                       <div class="form-group">
                       <label for="">Kode Buku</label>
                       <input type="text" name="kb" class="form-control">
                       </div>
                       <div class="form-group">
                       <label for="">Pengarang</label>
                       <input type="text" name="pengarang" class="form-control">
                       </div>
                       <div class="from-grup">
                           <label for="">Jenis Buku</label>
                           <select name="jenisbuku" class="required" title="Harus Diisi">
                           <option value="novel">novel</option><br>
                           <option value="Fiksi">Fiksi</option><br>
                           <option value="novel">Horror</option><br>
                           <option value="novel">Cergam</option><br>
                           <option value="novel">Komik</option><br>
                           </select>
                       </div>
                       <div class="form-group">
                       <label for="">Harga Buku</label>
                       <input type="hb" name="hb" class="form-control">
                       </div>
                         <div class="form-group">
                         <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                         <button type="reset" class="btn btn-warning">Reset</button>
                         </div>
                    </form>
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