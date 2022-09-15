<?php

$koneksi = new mysqli("localhost", "root", "", "tes_kominfo");

$id = $_POST['id'];
$website = $_POST['website'];
$phone = $_POST['phone'];

$sql = "insert into results (id, website, phone)
                values
                ('$id', '$website', '$phone')";
$hasil = mysqli_query($koneksi, $sql);

if (!$hasil) {
    echo "Gagal Simpan, silahkan diulangi!<br />";
    echo mysqli_error($koneksi);
    echo "<br/><input type='button' value='Kembali'
          onClick='self.history.back()'>";
    exit;
} else {
    ?>
        <script language="JavaScript">
            alert('Anda Berhasil Menambah Data');
            window.location='../../index.php?act=results';
        </script>
        <?php

    }
    ?>
