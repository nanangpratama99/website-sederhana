    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Form Pendaftaran</title>
    </head>
    <body>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
    <!-- tabel -->
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" size="20" maxlenght="50" /></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tmp_lahir" size="10" maxlenght="30" /></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl_lahir" size="10" maxlenght="30" /></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" size="10" id="lakiLaki"/>Laki-laki</td>
            <td><input type="radio" name="jenis_kelamin" size="10" id="perempuan"/>Perempuan</td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <select>
                    <option value="">--Pilih--</option>
                    <option value="MN">Manajemen</option>
                    <option value="KM">Komputer</option>
                    <option value="BI">B. Inggris</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea>
            </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><button value="simpan">Simpan</button>
                <button value="ubah">Ubah</button>
                <button value="hapus">Hapus</button>
            </td>
        </tr>
    </table>
    </body>
    </html>