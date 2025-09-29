<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi UMKM</title>
</head>
<body>
    <h2>Input Data UMKM</h2>
    <form action="/proses" method="post">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>

        <label>Nama UMKM:</label>
        <input type="text" name="namaumkm"><br><br>

        <label>Deskripsi:</label>
        <input type="text" name="deskripsi"><br><br>

        <label>Alamat:</label>
        <textarea name="alamat"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>