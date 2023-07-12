<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Biodata</title>
        <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background: rgba(0, 0, 0, 0.8);
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h1 {
            color: white;
            margin-top: 0;
        }

        p {
            color: white;
            margin-bottom: 10px;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Hasil Biodata</h1>
            <?php
            $biodatas = ['nama', 'alamat', 'jenis_kelamin', 'usia'];
            $error = false;

            foreach ($biodatas as $biodata) {
                if (empty($_POST[$biodata])) {
                    $error = true;
                    break;
                }
            }

            if ($error) {
                header("Location: index.php?error=biodata_kosong");
                exit();
            } else {
                $nama = $_POST['nama'];
                $alamat = $_POST["alamat"];
                $jenis_kelamin = $_POST["jenis_kelamin"];
                $usia = $_POST["usia"];

                echo "<p>Nama anda adalah " . $nama . "</p>";
                echo "<p>Alamat: " . $alamat . "</p>";
                echo "<p>Jenis Kelamin: " . $jenis_kelamin . "</p>";
                echo "<p>Usia: " . $usia . "</p>";
            }
            ?>
        </div>
    </body>
</html>
