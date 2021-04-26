<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Javascript Blocks -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />

    <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />

    <!-- Custom styles for this template -->
    <link href="Style.css" rel="stylesheet">

    <title>Bengkel</title>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />
  </head>
  <body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/Logo-bengkel.webp" alt="" width="30" height="24">
            </a>
            <form class="d-flex">
                <a class="btn btn-primary" href="login.php" role="button">Login</a>
            </form>
        </div>
    </nav>




    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>Cari Bengkel Mu</h2>
              <div id="search-section">
              	<form id="suggestion_form" name="gs" method="get" action="#">
                <div class="searchText"> 
                  <input type="text" name="q" class="searchText" placeholder="Search here...">
                </div>
                    <input type="submit" name="results" class="main-button" value="Search">
                 </form>
                
               </div>
            </div>
          </div>
            <div class="footer-text caption">
              <h5>Membantu menemukan bengkel terdekat dari lokasi anda</h5>
            </div>  
        </div> 
      </div>
    </div>


    <div class="peta">
    <?php require("connection.php");?> 
    <div id='map' style='height:450px; width:600px;'>
        <?php
            $query = "SELECT * FROM markers";
            $sql = mysqli_query($con, $query);
        ?>
         <script type = "text/javascript">
            L.mapbox.accessToken = 'pk.eyJ1IjoibHV4b24xMjQ4IiwiYSI6ImNrbmN6ajluNjFjYXkycGxjeGp6ODNjd3YifQ.6_b_jttNg5AvVKebGQsH6A';
            var map = L.mapbox.map('map')
                .setView([-7.983908,112.621391], 10)
                .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

    
            var mylayer = L.mapbox.featureLayer().addTo(map);
    </script>
    </div>
    <div id ="keterangan">
        <h2>Details</h2>
        <br>
        <form id="details">
            <input type="text" id="nama" placeholder="nama"><br>
            <input type="text" id="alamat" placeholder="alamat"></br>
            <input type="text" id="telepon" placeholder="No.Telp"></br>
            <input type="text" id="keterangan" placeholder="Keterangan"></br>
        </form>
    </div>
    </div>
    <div class="container">
        <div class="col-8">
        </br></br>
        <h2>Tabel Data Bengkel</h2>
        <button type="button">Add</button>
        <br>
        <form action="#" method="get">
	        <input type="text" name="cari">
            <input type="button" value="Edit">
	        <input type="submit" value="Delete">
        </form> 
        <table class="table">
            <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Keterangan</th>
            </tr>
        <?php
            $query1 = "SELECT * FROM markers";
            $sql1 = mysqli_query($con, $query1);
            while ($row = mysqli_fetch_array($sql1)) {
            echo "<tr><th>".$row['id']."</th>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['telepon']."</td>
            <td>".$row['longitude']."</td>
            <td>".$row['latitude']."</td>
            <td>".$row['keterangan']."</td>";}
        ?>
            </table>
        </div>
    </div>
    <footer>
        <p></p>
        <p></a></p>
    </footer> 
        
        

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
