<?php
// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "rafi");

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Ambil data dari tiap elemen di form
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $asal = $_POST["asal"];

    // Query insert data
    $query = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, agama_siswa, asal_sekolah)
            VALUE ('$nama', '$alamat', '$agama', '$asal')";

    mysqli_query($conn, $query);

    // Cek apakah data berhasil ditambahkan
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #4EC274;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .container {
            padding: 20px;
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            flex: 1;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: black;
        }

        form ul {
            list-style: none;
            padding: 0;
        }

        form li {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tambah Data Siswa</h1>
    </header>

    <div class="container">
        <h2>Formulir Siswa</h2>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" id="alamat" required>
                </li>
                <li>
                    <label for="agama">Agama:</label>
                    <input type="text" name="agama" id="agama" required>
                </li>
                <li>
                    <label for="asal">Asal Sekolah:</label>
                    <input type="text" name="asal" id="asal" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>
        </form>
    </div>

    <footer>
        
    </footer>
</body>

</html>