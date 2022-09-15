<?php
$kon = new mysqli("localhost", "root", "", "tes_kominfo");

$id = $_GET['id'];

$query = mysqli_query($kon, "delete from results where id='$id'") or die(mysqli_error());

if ($query) {
    ?>
	<script language="JavaScript">
		alert('Anda Berhasil Menghapus Data');
	 	window.location='../../index.php?act=results';
	</script>
	<?php
}
?>
