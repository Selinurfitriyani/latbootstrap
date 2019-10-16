<?php
class Siswa extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        
        $datadiri = mysqli_query($this->koneksi,"select * from formulir");
        // var_dump($datasiswa);
        return $datadiri;
    }
    // Menambah Data
    public function create($nama, $alamat ,$tanggal_lahir ,$jenis_kelamin ,$agama ,$umur)
    {
        
        mysqli_query($this->koneksi,"insert into formulir values('','$nama','$alamat','$tanggal_lahir','$jenis_kelamin','$agama','$umur')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datadiri = mysqli_query($this->koneksi,"select * from formulir where id='$id'");
        return $datadiri;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadiri = mysqli_query($this->koneksi,"select * from formulir where id='$id'");
        return $datadiri;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tanggal_lahir ,$jenis_kelamin , $agama ,$umur)
    {
        mysqli_query($this->koneksi,"update formulir set nama='$nama',alamat='$alamat', tanggal lahir='$tanggal_lahir',jenis kelamin='$jenis_kelamin',agama='$agama',umur='$umur' where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from formulir where id='$id'");
    }
}
?>