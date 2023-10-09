<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="proses_biodata.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Pria" id="pria" required>
        <label for="pria">Pria</label><br>
        <input type="radio" name="jenis_kelamin" value="Wanita" id="wanita" required>
        <label for="wanita">Wanita</label><br><br>

        <label for="hobi">Hobi:</label><br>
        <input type="checkbox" name="hobi1" value="Membaca"> Membaca<br>
        <input type="checkbox" name="hobi2" value="Menulis"> Menulis<br>
        <input type="checkbox" name="hobi3" value="Menggambar"> Menggambar<br>
        <input type="checkbox" name="hobi4" value="Memasak"> Memasak<br>
        <input type="checkbox" name="hobi5" value="Tidak ada"> Tidak ada<br><br>

        <label for="agama">Agama:</label>
        <select name="agama" id="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="katholik">Katholik</option>
            <option value="Kong hu chu">Kong hu chu</option>
        </select><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea name="alamat" id="alamat" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
