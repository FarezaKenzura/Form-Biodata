<html lang="en">
	<head>
        <meta charset="UTF-8">
		<title>Membuat Form Biodata</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>
        <style>
            .form-input-material {
                --input-default-border-color: white;
                --input-border-bottom-color: white;
            }
        </style>
	</head>

    <body>
        <form action="cek.php" method="post" class="biodata-form">
            <h1>Form Biodata</h1>
                <h4>Masukkan Biodata Anda :</h4>
                <?php 
                if (isset($_GET['error']) && $_GET['error'] === 'biodata_kosong') {
                    echo "<h4 style='color:red'>Ada Biodata yang belum diisi!</h4>";
                }
                ?>
                <div class="form-input-material">
                    <input type="text" name="nama" id="nama" placeholder=" " autocomplete="off" class="form-control-material">
                    <label for="nama">Nama:</label>
                </div>
                <div class="form-input-material">
                    <input type="text" name="alamat" id="alamat" placeholder=" " autocomplete="off" class="form-control-material">
                    <label for="alamat">Alamat:</label>
                </div>
                <div class="form-input-material">
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder=" " autocomplete="off" class="form-control-material">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                </div>
                <div class="form-input-material">
                    <input type="number" name="usia" id="usia" placeholder=" " autocomplete="off" class="form-control-material">
                    <label for="usia">Usia:</label>
                </div>
            <button type="submit" value="Cek" class="btn btn-primary btn-ghost">Submit</button>
        </form>
	</body>
</html>
