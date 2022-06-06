<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Project Akuisi Data</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
      <script type="text/javascript" src="assets/js/mdb.min.js"></script>
      <script type="text/javascript" src="jquery/jquery-latest.js"></script>


    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
    

      $(document).ready(function() {

        setInterval(function() {
          $("#ceksuhu").load('ceksuhu.php');
          $("#cekkelembapan").load('cekkelembapan.php');
           $("#cekldr").load('cekldr.php');
        },1000 );

      } );
    </script>

      <script type="text/javascript">
          var refreshid = setInterval(function(){
            $('#responcontainer').load('data.php');

          },1000);
      </script>

  </head>
  <body>
  
    <div class="container" style="text-align: center; margin-top: ">
      
      <h2>Monitoring MultiSensor menggunakan ESP32 <br> Secara Realtime</h2>

      <h5>Alfandi, Danny Permana, Syarif Hidayat</h5>

      <div style="display: flex; ">

      <!-- menampilkan nilai suhu -->
              <div class="card text-center" style="width: 33.33%">
          <div class="card-header" style=" font-size: 30px; font-weight: bold; background-color: blue; color: white">
            Suhu
          </div>
          <div class="card-body">
            <h1> <span id="ceksuhu"> 0</span> </h1>
          </div>
        </div>
        <!-- akhir menampilkan nilai suhu -->

    <!-- menampilkan nilai kelembapan -->
                  <div class="card text-center" style="width: 33.33%">
              <div class="card-header" style=" font-size: 30px; font-weight: bold; background-color: green; color: white">
                Kelembapan
              </div>
              <div class="card-body">
                <h1> <span id="cekkelembapan">0</span> </h1>
              </div>
            </div>
            <!-- akhir menampilkan nilai kelembapan -->

            <!-- menampilkan nilai ldr -->
              <div class="card text-center" style="width: 33.33%">
          <div class="card-header" style=" font-size: 30px; font-weight: bold; background-color: red; color: white">
            LDR
          </div>
          <div class="card-body">
            <h1> <span id="cekldr">0</span></h1>
          </div>
        </div>
        <!-- akhir menampilkan nilai LDR -->
        </div>
    </div>

    <div class="container" id="responcontainer" style="width: 50%; text-align: center">

      
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>