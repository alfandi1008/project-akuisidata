<?php 
	$konek = mysqli_connect("localhost","root","","db_akuisidata");

	$suhu = $_GET['suhu'];
	$kelembapan = $_GET['kelembapan'];
	$ldr = $_GET['ldr'];

	mysqli_query($konek, "ALTER TABLE tb_akuisidata AUTO_INCREMENT=1");

	$simpan = mysqli_query($konek, "insert into tb_akuisidata(suhu, kelembapan, ldr)values('$suhu','$kelembapan', '$ldr')");

	if($simpan)
		echo "Berhasil dikirim";
	else 
		echo "Gagal Terkirim";

 ?>