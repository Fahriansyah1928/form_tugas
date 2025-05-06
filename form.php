<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="proses.php" method="POST">
        <label for="nama">Nama depan : </label> <br>
        <input type= "text" name= "nama_depan" id="nama_depan"><br><br>

        <label for="nama">Nama belakang : </label> <br>
        <input type= "text" name= "nama_belakang" id="nama_belakang"> <br><br>

        <label for="Tingkat">Tingkat : </label><br>
        <select name="x" id="x">
        <option value ="SD">SD</option>
        <option value ="SMP">SMP</option>
        <option value ="SMK">SMK</option>
</select> <br><br>

    <label for="jenis kelamin"> Jenis kelamin : </label><br>
    <input type= "radio" name="jenis_kelamin" value="laki-laki"> laki laki
    <input type= "radio" name="jenis_kelamin" value="perempuan"> perempuan <br><br>

    <label for="hobi"> hobi :</label> <br>
    <input type= "checkbox" name="hobi" value="baca"> baca
    <input type= "checkbox" name="hobi" value="maen game"> maen game
    <input type= "checkbox" name="hobi" value="olahraga"> olahraga <br><br>
    <button type="submit">submit</button>
</form>



    
</body>
</html>