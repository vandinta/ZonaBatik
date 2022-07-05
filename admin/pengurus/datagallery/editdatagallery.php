<?php
include '../../login/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row["id_gallery"];
        $kota = $row["id_kota"];
        $foto = $row["foto"];
    }
} else {
    header("Location: datagallery.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Edit Data Gallery Zona Batik</title>
</head>

<body>
<div class="input">
    <form action="proseseditdatagallery.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset class="dua">
            <center><legend>
                <h3>Edit Data Gallery Zona Batik</h3>
            </legend></center>
            <center><div class="isi"><table>
                <tr>
                    <th>ID Foto</th>
                    <th>:</th>
                    <th><input type="text" name="id_gallery" id="id_gallery" size="50" maxlength="15" value="<?= $id; ?>" readonly></th>
                </tr>
                <tr>
                    <th>Kota</th>
                    <th>:</th>
                    <th>
                        <select name="id_kota" id="id_kota" required>
                            <option value="">--Pilih Kota--</option>
                            <option value="1">Solo</option>
                            <option value="2">Pekalongan</option>
                            <option value="3">Cirebon</option>
                            <option value="4">Yogyakarta</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Foto</th>
                    <th>:</th>
                    <th><input type="file" name="foto" id="foto" required></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>
                        <button type="submit" name="edit" id="edit">Edit</button>
                    </th>
                </tr>
            </table></center></div>
        </fieldset>
    </form>
</div>
</body>

</html>