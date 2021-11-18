<html lang="en">

<head>
    <title>Formulir Registrasi</title>
    <!--display-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--button-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function checkString(n) {
            let input = String(n);
            for (let i = 0; i < input.length; i++) {
                if (!(isNaN(input.charAt(i)))) {
                    return true; // kalau mengandung angka
                }
            }
            return false;
        }

        $(document).ready(
            function () {
                $("#submit").click(
                    function validateForm() {
                        let nama, pw, nomor, kursus, kode;
                        nama = $("#name").val();
                        pw = $("#pass").val();
                        nomor = $("#telp").val();
                        kursus = $("course").val();
                        kode = $("#code").val();

                        if (checkString(nama)) {
                            $(".pesan-nama").css("display", "block");
                            $(".pesan-nama").css("color", "red");
                        }

                        if (pw.length <= 7 || pw.length >= 17) {
                            $(".pesan-pw").css("display", "block");
                            $(".pesan-pw").css("color", "red");
                        }

                        if (isNaN(nomor) || nomor.length <= 7) {
                            $(".pesan-telp").css("display", "block");
                            $(".pesan-telp").css("color", "red");
                        }

                        if (kursus == null) {
                            $(".pesan-kursus").css("display", "block");
                            $(".pesan-kursus").css("color", "red");
                        }

                        if (!checkString(kode) || kode.length != 6) {
                            $(".pesan-kode").css("display", "block");
                            $(".pesan-kode").css("color", "red");
                        }
                    }
                );
            }
        );
    </script>

    <style>
        .pesan {
            display: none;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>

<body style="background-color: rgb(14, 12, 72); padding: 100px;">
    <div class="container-sm">
        <div class="card" style="padding: 50px;">
            <h4 style="text-align: center;"><b>REGISTRATION FORM</b></h4>
            <br>
            <form method="GET" action="https://www.google.com/">
                <div class="form-group">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" class="form-control" required>
                    <div class="pesan pesan-nama">Invalid! Name must not contain number.</div>
                    <br>

                    <label for="address">Address:</label><br>
                    <input type="text" id="address" name="address" class="form-control" required>
                    <br>

                    <label for="email">E-mail Address: </label><br>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <br>

                    <label for="pass">Password: </label><br>
                    <input type="password" id="pass" name="pass" class="form-control" required>
                    <span class="pesan pesan-pw">Invalid! Password must be filled out by 8 - 16 length character.</span>
                    <br>

                    <label for="telp">Telephone: </label><br>
                    <input type="text" id="telp" name="telp" class="form-control" required>
                    <span class="pesan pesan-telp">Invalid! Telephone must be filled out by 8 length number at
                        least.</span>
                    <br>

                    <label for="course">Select your course</label><br>
                    <select id="course" name="course" style="width: 100%;">
                        <option value="def" selected></option>
                        <option value="BTECH">BTECH</option>
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                        <option value="B COM">B COM</option>
                        <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
                    </select>
                    <span class="pesan pesan-kursus">Invalid! Course must be selected</span>
                    <p></p>

                    <label for="code">Zip Code: </label><br>
                    <input type="text" id="code" name="code" class="form-control" required>
                    <span class="pesan pesan-kode">Invalid! Zip code must be filled out by 6 length number.</span>
                    <br>

                    <input type="submit" id="submit" value="Send">
                    <input type="reset" id="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
