<?php 
	$konek = mysqli_connect("localhost","root","","db_akuisidata");


	$sql_id = mysqli_query($konek, "SELECT MAX(id) FROM tb_akuisidata");
	$data_id = mysqli_fetch_array($sql_id);

	$id_akhir = $data_id['MAX(id)'];
	$id_awal = $id_akhir - 5 ;

		$tanggal = mysqli_query($konek,"select tanggal from tb_akuisidata where id>='$id_awal' and id<='$id_akhir' order by id asc");

		$suhu = mysqli_query($konek,"select suhu from tb_akuisidata where id>='$id_awal' and id<='$id_akhir' order by id asc");
		$kelembapan = mysqli_query($konek,"select kelembapan from tb_akuisidata where id>='$id_awal' and id<='$id_akhir' order by id asc");
		$ldr = mysqli_query($konek,"select ldr from tb_akuisidata where id>='$id_awal' and id<='$id_akhir' order by id asc");


 ?>

 <!--- grafik-->

 <div class="panel panel-primary">
 	<div class="panel-heading"style="text-align: center; font-size: 30px; font-weight: bold; background-color: white; color: black ">
 		grafik sensor
 	</div>

 	<div class="panel-body">
 		<canvas id="myChart"></canvas>
 		<script type="text/javascript">
 			var canvas = document.getElementById('myChart');
 			var data ={
 				labels :[
 					<?php 
 						while ($data_tanggal = mysqli_fetch_array($tanggal)) {
 							echo '"'.$data_tanggal['tanggal'].'",';
 						}
 					 ?>
 				],

 				datasets :[
 					{
 						label : "suhu",
 						fill: true,
 						backgroundColor: "rgba(0, 0, 255, 0.2)",
 						pointRadius: 5,
 						borderColor: "rgba(0, 0, 255, 1)",
 						lineTension: 0.5,
 						data : [
 							<?php 
 								while ($data_suhu = mysqli_fetch_array($suhu)) {
 									echo $data_suhu['suhu'].',';
 								}
 							 ?>
 						]
 					},
 					
 					{
 						label : "kelembapan",
 						fill: true,
 						backgroundColor: "rgba(255, 255, 0, 0.2)",
 						borderColor: "rgba(255, 255, 0, 1)",
 						lineTension: 0.5,
 						pointRadius: 5,
 						data : [
 							<?php 
 								while ($data_kelembapan = mysqli_fetch_array($kelembapan)) {
 									echo $data_kelembapan['kelembapan'].',';
 								}
 							 ?>
 						]
 					},
 					
 					{
 						label : "ldr",
 						fill: true,
 						backgroundColor: "rgba(255, 0, 0, 0.2)",
 						borderColor: "rgba(255, 0, 0, 1)",
 						lineTension: 0.5,
 						pointRadius: 5,
 						data : [
 							<?php 
 								while ($data_ldr = mysqli_fetch_array($ldr)) {
 									echo $data_ldr['ldr'].',';
 								}
 							 ?>
 						]
 					}

 				]
 			};

 			var option = {
 				showLines : true,
 				animation : {duration : 0}
 			};

 			var myLineChart = Chart.Line(canvas, {
 				data : data,
 				options : option
 			});


 		</script>


 	</div>

 </div>