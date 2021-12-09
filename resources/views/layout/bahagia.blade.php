<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    {{-- navbar bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .footer {
            width: 100%;
            padding: 15px 15px;
            bottom: 0;
            color: white;
            background-color: rgb(14, 12, 72);
            text-align: center;
        }
        .header {
            width: 100%;
            padding: 15px 15px;
            top: 0;
            color: white;
            background-color: rgb(14, 12, 72);
            text-align: center;
        }
        .menu {
            padding: 10px 10px;
            left: 0;
        }
        .content {
            padding: 5px 5px;
        }
        img {
            height: 110px;
            width: 110px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="/fotoDara.png">
        <b> Dara Nasywa 5026201074 <b>
    </div>

        <table>
            <tr>
                <td style="width: 20%">
                    <div class="menu" style="width: 70%">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid" style="background-color: rgb(14, 12, 72)">
                                <ul class="nav navbar-nav">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/pegawai">Pegawai</a></li>
                                    <li><a href="/absen">Absensi</a></li>
                                    <li><a href="/mutasi">Mutasi</a></li>
                                    <li><a href="#">Minggu Depan</a></li>
                                    <li><a href="#">Praktikum</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </td>

                <td style="width: 80%">
                    <div class="content">
                        <div class="card" >
                            <h3>@yield('judulhalaman')</h3>

                            @section('konten')

                            @show
                        </div>
                    </div>
                </td>
            </tr>
        </table>

    <br><br>
    <div class="footer">
        © Hak cipta oleh Dara Nasywa - 5026201074
    </div>
</body>

</html>
