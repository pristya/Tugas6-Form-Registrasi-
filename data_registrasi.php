<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #99B080;">

<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$jeniskel = $_POST['jeniskel'];
$pendididkan = $_POST['pendidikan'];
?>

<div class="card" style="
    position: absolute;
    top: 15%;
    left: 30%;
    width: 500px; 
    height: 400px;
    position: absolute;
    padding: 20px;
    ">
<table class="table" style="">
    <tr style="text-align: center;">
        <td colspan="3"><b>DATA REGISTRASI</b></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><?php echo $tempat; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo $tanggal; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $jeniskel; ?></td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td><?php echo $pendididkan; ?></td>
    </tr>
</table>
<a class="btn btn-primary" href="form_registrasi.php" role="button" style="
    position: absolute;
    left: 35%;
    margin: 20px;
    margin-top: 20px;
    top: 75%;
">Back to home</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>