<html lang="en">

<head>
    <title>Formulir Registrasi Barang</title>
    <!--display-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--button-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function () {
            // 'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <style>
        .pesan {
            display: none;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>

<body style="background-color: rgb(8, 18, 54); padding: 100px;">
    <div class="container-sm" style="background-color: white; width: 70%; padding: 50px;">
        Dara Nasywa
        <br> Dara
        <br> 5026201074

        <p>
        <h4 style="text-align: center;"><b>Form Input Data Barang</b></h4>
        </p>
        <br>
        <form method="GET" action="https://www.google.com/" class="needs-validation">
            <div class="container">
                <div class="row" style="padding: 10px;">
                    <div class="col-3">
                        Nama Barang
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col-8">
                        <input type="text" id="name" name="name" class="form-control" placeholder="ex: xxxxxxxxxx"
                            pattern="{10,}" required>
                        <div class="invalid-feedback">Minimal mengandung 10 karakter</div>
                    </div>
                </div>

                <div class="row" style="padding: 10px;">
                    <div class="col-3">
                        Harga
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col-8">
                        <input type="text" id="telp" name="telp" class="form-control" placeholder="ex: 5000"
                            pattern="[5-9][0-9][0-9]" required></td>
                        <div class="invalid-feedback">Rentang harga dimulai dari kisaran Rp5.000,00</div>
                    </div>
                </div>

                <div class="row" style="padding: 10px;">
                    <div class="col-3">
                        Jenis Barang
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col-8">
                        <select id="course" name="course" style="width: 100%;" required>
                            <option value="food">Makanan</option>
                            <option value="drink">Minuman</option>
                            <option value="etc">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="row" style="padding: 10px;">
                    <div class="col-3">
                        Kode Barcode
                    </div>
                    <div class="col-1">
                        :
                    </div>
                    <div class="col-8">
                        <input type="text" id="code" name="code" class="form-control" placeholder="ex: 1234567890"
                            pattern="[0-9] {10,}" required>

                        <div class="invalid-feedback">Kode Barcode minimal berisikan 10 digit angka</div>
                    </div>
                </div>

                <div class="row justify-content-around" style="margin-top: 50px;">
                    <div class="col-4">
                        <input type="submit" value="Kirim"
                            style="width: 200px; background-color: #3366FF; outline-color:#3366FF; color: white;">
                    </div>
                    <div class="col-4">
                        <input type="reset" value="Reset"
                            style="width: 200px; background-color: #00FF00; outline-color:#00FF00;">
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
