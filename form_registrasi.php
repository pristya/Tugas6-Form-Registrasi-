<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="
    background-image: url('ab.jpg');
">
<form action="data_registrasi.php" method="post">
    <div class="card" style="
    width: 600px; 
    padding: 20px;
    padding-bottom: 70px;
    position: absolute;
    top: 15%;
    left: 30%;
    background-color: #A3A847;
    ">
    <h2 class="card-title" align="center"> FORM REGISTRASI </h2><br>
    <div class="row" style="padding:10px;">
    <p>Isi Data Dibawa ini : </p>
        <div class="col-sm-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Nama Lengkap" name="nama">
                <label for="floatingInputGrid">Nama Lengkap</label>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Tempat Lahir" name="tempat">
                <label for="floatingInputGrid">Tempat Lahir</label>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Tanggal Lahir" name="tanggal">
                <label for="floatingInputGrid">Tanggal Lahir</label>
            </div>
        </div>
    </div>
    <div class="row" style="padding:10px;">
        <div class="col">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Alamat" name="alamat">
                <label for="floatingInputGrid">Alamat</label>
            </div>
        </div>
    </div>
    <div class="row" style="padding:10px;">
    <div class="col-sm">   
    <label for="jeniskel" class="form-label">Jenis Kelamin</label><br>    
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jeniskel" id="inlineRadio1" value="Laki-laki">
            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jeniskel" id="inlineRadio2" value="Perempuan">
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
    </div>
    <div class="col-sm">
    <label for="pendidikan" class="form-label">Pendidikan</label>
        <select class="form-select form-select" name="pendidikan">
            <option value="SMA">SMA</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
        </select>
    </div>
    <div class="row" style="margin: 10px; padding: 20px;">
        <div class="col-sm" style="position: absolute; left: 30%;">
            <input class="btn btn-success" type="submit" value="  Submit  ">
        </div>
        <div class="col-sm" style="position: absolute; left: 50%;">
            <input class="btn btn-danger" type="reset" value="  Cancel  ">
        </div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>