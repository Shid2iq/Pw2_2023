<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
body {
    background-color : #0081C9;
}
.container {
    background-color :   #FFC93C;
    padding : 4px;
    width: 60%;
    border-radius : 10px;
}
h1{
    padding : 5px;
}
label {
    font-weight : bold;
    font-family : calibri;
}
    </style>
</head>
<body>
    <h1 align="center">Form Pendaftaran</h1>
    <div class="container">
    <div class="container-fluid">
        <div class="row mx-auto w-50 mt-5">
            <div class="col-12">
                <form method="POST" action="hasil.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label> 
                        <div class="col-8">
                        <input id="email" name="email" placeholder="Masukan Email Anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                        <div class="col-8">
                        <input id="alamat" name="alamat" placeholder="Masukan Alamat Anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telpon" class="col-4 col-form-label">Telpon</label> 
                        <div class="col-8">
                        <input id="telpon" name="telpon" placeholder="Masukan Nomer Telepon anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
</body>
</html>