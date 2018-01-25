<?php

session_start();
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];
$instansi = $_POST['instansi'];
$keperluan = $_POST['keperluan'];



include 'koneksi.php';

mysqli_query($db, "INSERT INTO guest (nik, nama, alamat, telpon, instansi, keperluan, tanggal) values ('".$nik."', '".$nama."', '".$alamat."', '".$telpon."', '".$instansi."','".$keperluan."', null)")or die(mysqli_error($db));

?>

<script type="text/javascript">
	alert('Data Berhasil Disimpan');
	document.location = 'index.php';
</script>

<?php

?>