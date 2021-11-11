<html lang="en">

<head>
    <title>Formulir Registrasi</title>
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
    <div class="container-sm">
        <table style="color: aliceblue;">
            <tr>
                <td>
                    Nama Mahasiswa
                </td>
                <td>
                    :
                </td>
                <td>
                    Dara Nasywa
                </td>
            </tr>
            <tr>
                <td>
                    Nama Panggilan
                </td>
                <td>
                    :
                </td>
                <td>
                    Dara
                </td>
            </tr>
            <tr>
                <td>
                    NRP
                </td>
                <td>
                    :
                </td>
                <td>
                    5026201074
                </td>
            </tr>
        </table>
        <div class="card" style="padding: 45px;">
            <h4 style="text-align: center;"><b>Form Input Data Barang</b></h4>
            <br>
            <form method="GET" action="https://www.google.com/" class="needs-validation">
                <div class="form-group row">
                    <table style="width: 75%;">
                        <tr>
                            <td><label for="name">Nama Barang</label><br></td>
                            <td>:</td>
                            <td><input type="text" id="name" name="name" class="form-control"
                                    placeholder="ex: Dara Nasywa" pattern="{10,}" required>
                            </td>
                        </tr>
                        <div class="invalid-feedback">Minimal mengandung 10 karakter</div>
                        <tr>
                            <td><label for="telp">Harga</label><br></td>
                            <td>:</td>
                            <td><input type="text" id="telp" name="telp" class="form-control" placeholder="ex: 5000"
                                    pattern="[5-9][0-9][0-9]" required></td>
                        </tr>
                        <div class="invalid-feedback">Rentang harga dimulai dari kisaran Rp5.000,00r</div>
                        <tr>
                            <td><label for="course">Jenis Barang</label></td>
                            <td>:</td>
                            <td>
                                <select id="course" name="course" style="width: 100%;" required>
                                    <option value="def" selected></option>
                                    <option value="BTECH">Makanan</option>
                                    <option value="BBA">Minuman</option>
                                    <option value="BCA">Lainnya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="code">Kode Barcode</label></td>
                            <td>:</td>
                            <td><input type="text" id="code" name="code" class="form-control"
                                    placeholder="ex: 1234567890" pattern="[0-9] {10,}" required></td>
                        </tr>
                        <div class="invalid-feedback">Kode Barcode minimal berisikan 10 digit angka</div>
                    </table>
                    <br>

                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-success">reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
