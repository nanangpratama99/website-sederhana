    <?php
    include("config.php");
    // cek apakah tombol simpan sudah diklik atau blum?
    if(isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $no_hp = $_POST['no_hp'];

    // buat query update
    $sql = "UPDATE mahasiswa SET nim = '$id', nama_lengkap = '$nama_lengkap', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', jurusan = '$jurusan', no_hp = '$no_hp', email = '$email' WHERE nim='$nim'";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: index.php');
        } else {
            die("Gagal menyimpan perubahan");
        }
    } else {
        die("Akses dilarang ...");
    }
?>