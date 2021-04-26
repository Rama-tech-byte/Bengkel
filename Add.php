<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Form Login</title>
        <link rel="canonical" href="index.php">
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="loginstyle.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-4">
                <h2>Tambah Data Lokasi</h2>
                <br>
                <form method = "POST" action="http://localhost/SIG/proses.php">
                    <div class="mo-3">
                    <label class="form-label">ID</label>
                    <div class="col-sm-10">
                    <input type="text" name ="id" class="form-control form-control-sm">
                    </div>
                    </div>
                    <div class="mo-3">
                    <label class = "form-label">Nama Lokasi</label>
                    <div class="col-sm-10">
                    <input type="text" name = "nama" class="form-control form-control-sm">
                    </div>
                    </div>
                    <div class="mo-3">
                    <label class = "form-label">Alamat</label>  
                    <div class="col-sm-10">
                    <textarea name = "alamat" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="mo-3">
                    <label class="form-label">No.Telepon</label>
                    <div class="col-sm-10">
                    <input type="text" name ="telepon" class="form-control form-control-sm">
                    </div>
                    </div>
                    <div class="mo-3">
                    <label class = "form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" name = "lng" class="form-control form-control-sm">
                    </div>
                    </div>
                    <div class="mo-3">
                    <label class = "form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="text" name = "lat" class="form-control form-control-sm">
                    </div>
                    </div>
                    <div class="mo-3">
                    <label class = "form-label">Tipe</label>
                    <div class="col-sm-10">
                        <input type="text" name = "tipe" class="form-control form-control-sm">
                    </div>
                    </div>
                <button type="submit" class="btn btn-success">SUBMIT</button>
                </form>
                </div>
            </div>
        </div>

</body>
</html>