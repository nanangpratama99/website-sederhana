    <?php
    include("config.php");

    if(isset($_POST['submit'])){
    
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $no_hp = $_POST['no_hp'];
    
    $sql = "INSERT INTO mahasiswa VALUE ('$nim', '$nama_lengkap','$tempat_lahir','$tanggal_lahir','$alamat','$jurusan','$no_hp', '$email')";
    $query = mysqli_query($koneksi, $sql);
    
    if( $query ) {
    
    header('Location: index.php?status=sukses');
    } else {
    
    header('Location: index.php?status=gagal');
    }
    } else {
    die("Akses dilarang...");
    }
    ?>