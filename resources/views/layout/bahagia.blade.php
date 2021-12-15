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
            width: 160px;
            border-radius: 15px;
            position: fixed;
            z-index: 1;
            top: 50px;
            left: 10px;
            background-color: rgb(14, 12, 72);
            overflow-x: hidden;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .menu a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 16px;
            color: white;
            display: block;
        }
        .menu a:hover {
            color: white;
        }
        .content {
            margin-left: 180px;
            margin-right: 20px;
            font-size: 16px;
            padding: 0px 10px;
        }
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
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

    <br>
    <div class="menu">
        <div class="container-fluid" style="background-color: rgb(14, 12, 72)">
            <ul class="nav navbar-nav">
                <li><a href="/pegawai">Pegawai</a></li><br>
                <li><a href="/absen">Absensi</a></li><br>
                <li><a href="/mutasi">Mutasi</a></li><br>
                <li><a href="/unggas">Praktikum</a></li><br>
                <li><a href="/karyawan1">EAS</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="card" >
            <h3>@yield('judulhalaman')</h3>

            @section('konten')

            @show
        </div>
    </div>

    <br><br>
    <div class="footer">
        © Hak cipta oleh Dara Nasywa - 5026201074
    </div>
</body>

</html>


        {{-- <table>
            <tr>
                <td > KOMEN style="width: 20%"
                    <div class="menu">
                        KOMEN <nav class="navbar navbar-inverse">
                            <div class="container-fluid" style="background-color: rgb(14, 12, 72)">
                                <ul class="nav navbar-nav">
                                    <li><a href="/pegawai">Pegawai</a></li><br>
                                    <li><a href="/absen">Absensi</a></li><br>
                                    <li><a href="/mutasi">Mutasi</a></li><br>
                                    <li><a href="/unggas">Praktikum</a></li>
                                </ul>
                            </div>
                        KOMEN </nav>
                    </div>
                </td>

                <td> KOMEN style="width: 80%"
                    <div class="content">
                        <div class="card" >
                            <h3>@yield('judulhalaman')</h3>

                            @section('konten')

                            @show
                        </div>
                    </div>
                </td>
            </tr>
        </table> --}}
