<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafi Belajar MySQL</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
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

        header h2 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: 300;
        }

        nav {
            margin: 20px auto;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        .container {
            flex: 1;
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }

        footer {
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
        <h1>PONDOK PESANTREN KALIMASADA</h1>
        <h2>MA TERPADU KALIMASADA</h2>
    </header>

    <div class="container">
        <nav>
            <a href="data_siswa.php">Daftar Siswa</a>
            <a href="tambah_siswa.php">Pendaftaran</a>
        </nav>
    </div>

    <footer>
        
    </footer>
</body>
</html>