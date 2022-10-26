<!DOCTYPE html>
<html lang="en">
<head>
    <title>Done</title>
</head>
<form action= "proses_tambah.php" method="POST">
<h2> FORM BANTUAN BLT </h2>
<body>
    <form>
        <fieldset>
            <p>
                <label for= "Nama Lengkap">Nama Lengkap:</label> 
                <input type="text" name="nama" />
</p>

<p>
                <label for="jenis_bantuan">Jenis Bantuan :</label>
                <br>
                <label><input type="radio" name="jenis_bantuan" value="tunai"/>Tunai</label>
</br>
<br>
                <label><input type="radio" name="jenis_bantuan" value="nontunai"/>NonTunai</label>
</br>
<br>
                <label><input type="radio" name="jenis_bantuan" value="beras"/>Beras</label>
</br>
<br>
                <label><input type="radio" name="jenis_bantuan" value="minyak"/>Minyak</label>
</br>
<br>
                <label><input type="radio" name="jenis_bantuan" value="gula"/>Gula</label>
</br>
            </p>

            <p>
                <input type="submit" value="KirimData" name="KirimData" />
            </p>


        </fieldset>
</form>
</body>
</html>