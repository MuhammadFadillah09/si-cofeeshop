<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Restoran, Kafe, Makanan, dan Minuman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        form label {
            flex-basis: 100%;
            margin-bottom: 5px;
        }

        form input, form select, form button {
            flex-basis: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        form button {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <h1>Data Restoran, Kafe, Makanan, dan Minuman</h1>

    <!-- Form to Add New Restoran -->
    <form id="restoranForm">
        <label for="nama_restoran">Nama Restoran:</label>
        <input type="text" id="nama_restoran" name="nama_restoran" required>
        <label for="alamat_restoran">Alamat Restoran:</label>
        <input type="text" id="alamat_restoran" name="alamat_restoran" required>
        <label for="kriteria_restoran">Kriteria Restoran:</label>
        <input type="text" id="kriteria_restoran" name="kriteria_restoran" required>
        <button type="submit">Tambah Restoran</button>
    </form>

    <!-- Tabel Restoran -->
    <table id="restoranTable">
        <thead>
            <tr>
                <th>ID Restoran (PK)</th>
                <th>Nama Restoran</th>
                <th>Alamat</th>
                <th>Kriteria</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Kafe -->
    <form id="kafeForm">
        <label for="nama_kafe">Nama Kafe:</label>
        <input type="text" id="nama_kafe" name="nama_kafe" required>
        <label for="alamat_kafe">Alamat Kafe:</label>
        <input type="text" id="alamat_kafe" name="alamat_kafe" required>
        <label for="kriteria_kafe">Kriteria Kafe:</label>
        <input type="text" id="kriteria_kafe" name="kriteria_kafe" required>
        <button type="submit">Tambah Kafe</button>
    </form>

    <!-- Tabel Kafe -->
    <table id="kafeTable">
        <thead>
            <tr>
                <th>ID Kafe (PK)</th>
                <th>Nama Kafe</th>
                <th>Alamat</th>
                <th>Kriteria</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Makanan -->
    <form id="makananForm">
        <label for="nama_makanan">Nama Makanan:</label>
        <input type="text" id="nama_makanan" name="nama_makanan" required>
        <button type="submit">Tambah Makanan</button>
    </form>

    <!-- Tabel Makanan -->
    <table id="makananTable">
        <thead>
            <tr>
                <th>ID Makanan (PK)</th>
                <th>Nama Makanan</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Minuman -->
    <form id="minumanForm">
        <label for="nama_minuman">Nama Minuman:</label>
        <input type="text" id="nama_minuman" name="nama_minuman" required>
        <button type="submit">Tambah Minuman</button>
    </form>

    <!-- Tabel Minuman -->
    <table id="minumanTable">
        <thead>
            <tr>
                <th>ID Minuman (PK)</th>
                <th>Nama Minuman</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Cofe Shop -->
    <form id="cofeShopForm">
        <label for="nama_cofe_shop">Nama Cofe Shop:</label>
        <input type="text" id="nama_cofe_shop" name="nama_cofe_shop" required>
        <!-- Add other fields specific to cofe shop if needed -->
        <button type="submit">Tambah Cofe Shop</button>
    </form>

    <!-- Tabel Cofe Shop -->
    <table id="cofeShopTable">
        <thead>
            <tr>
                <th>ID Cofe Shop (PK)</th>
                <th>Nama Cofe Shop</th>
                <!-- Add other columns specific to cofe shop if needed -->
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Kriteria Restoran -->
    <form id="kriteriaRestoranForm">
        <label for="nama_kriteria">Nama Kriteria:</label>
        <input type="text" id="nama_kriteria" name="nama_kriteria
        <label for="nama_kriteria">Nama Kriteria:</label>
        <input type="text" id="nama_kriteria" name="nama_kriteria" required>
        <!-- Add other fields specific to kriteria restoran if needed -->
        <button type="submit">Tambah Kriteria Restoran</button>
    </form>

    <!-- Tabel Kriteria Restoran -->
    <table id="kriteriaRestoranTable">
        <thead>
            <tr>
                <th>ID Kriteria Restoran (PK)</th>
                <th>Nama Kriteria Restoran</th>
                <!-- Add other columns specific to kriteria restoran if needed -->
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Data Penilaian Restoran -->
    <form id="dataPenilaianRestoranForm">
        <!-- Add fields related to data penilaian restoran -->
        <button type="submit">Tambah Data Penilaian Restoran</button>
    </form>

    <!-- Tabel Data Penilaian Restoran -->
    <table id="dataPenilaianRestoranTable">
        <thead>
            <tr>
                <th>ID Penilaian Restoran (PK)</th>
                <!-- Add other columns related to data penilaian restoran -->
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Data Pemesanan -->
    <form id="dataPemesananForm">
        <!-- Add fields related to data pemesanan -->
        <button type="submit">Tambah Data Pemesanan</button>
    </form>

    <!-- Tabel Data Pemesanan -->
    <table id="dataPemesananTable">
        <thead>
            <tr>
                <th>ID Data Pemesanan (PK)</th>
                <!-- Add other columns related to data pemesanan -->
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Data Pegawai -->
    <form id="dataPegawaiForm">
        <!-- Add fields related to data pegawai -->
        <button type="submit">Tambah Data Pegawai</button>
    </form>

    <!-- Tabel Data Pegawai -->
    <table id="dataPegawaiTable">
        <thead>
            <tr>
                <th>ID Data Pegawai (PK)</th>
                <!-- Add other columns related to data pegawai -->
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <!-- Form to Add New Data Pengguna -->
    <form id="dataPenggunaForm">
        <!-- Add fields related to data pengguna -->
        <button type="submit">Tambah Data Pengguna</button>
    </form>

    <!-- Tabel Data Pengguna -->
    <table id="dataPenggunaTable">
        <thead>
            <tr>
                <th>ID Data Pengguna (PK)</th>
                <!-- Add other columns related to data pengguna -->
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Content -->
        </tbody>
    </table>

    <script>
        // JavaScript code for handling form submissions and dynamically updating tables will go here
    </script>
</body>
</html>
