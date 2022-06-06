<?php 
//buatlah koneksi ke database
	$konek = mysqli_connect("localhost", "root", "" , "db_akuisidata");

	//baca dta dr tb_akuisi data
	$sql = mysqli_query($konek, "select * from tb_akuisidata order by id desc");//data terakhir akan berada di atas

	//baca data paling atas
	$data = mysqli_fetch_array($sql);
	$suhu = $data['suhu'];

	if($suhu == "") $suhu = 0;

	echo $suhu;



 ?>