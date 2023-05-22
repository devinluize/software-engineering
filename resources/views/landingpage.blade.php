<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LANDING PAGE</title>
</head>

<body>

    <style>
        .btn-outline-success:hover {
            background-color: #C7EEFF;
            color: black;
            border-color: black;
        }

        .btn {
            border-color: black;
            color: black;
        }

        .navbar-custom {
            /* background-color: #C7EEFF; */
            background-color: #0077C0;
        }

        .body2 {
            background-color: #0077C0;
        }

        body {
            background-color: #C7EEFF;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <img src="{{ asset('image/Logo.png') }}" style="width : 80px; height : 70px">
            <a class="navbar-brand">STITCH</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>

            <div class="d-flex">
                <form class="mx-2">
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </form>

                <form class="mx-2">
                    <button class="btn btn-outline-success" type="submit">Register</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="body2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <br>
                    <h1 style="font-size: 96px">CLOTHES ARE</h1>
                    <h1 style="font-size: 96px">BEAUTY</h1>
                    <br>
                    <br>
                    <br>
                    <button class="btn btn-outline-success" type="submit;"
                        style="margin-top : -50px; margin-left : 10px;">Coba Sekarang</button>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('image/landing_page1.png') }}" style="margin-top:100px;">
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="body3">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="position: relative; z-index: 1;">
                    <div class="landing_page2_container"
                        style="background-color : #0077C0; width: 500px; height: 500px;position: absolute; z-index: 2">
                    </div>
                    <img src="{{ asset('image/landing_page2.png') }} "
                        style="background-color : white; width : 500px;
                            height : 500px; margin-left: 50px;position: relative; top: -10px; z-index: 3">
                </div>

                <div class="col-md-6">
                    <h1>FIX CLOTH</h1>
                    <br>
                    <br>
                    <h2>Fix cloth atau memperbaiki baju adalah proses untuk memperbaiki atau mengembalikan kondisi
                        baju
                        yang rusak
                        seperti sobekan, lubang, atau jahitan yang lepas
                    </h2>
                    <br>
                    <button class="btn btn-outline-success" type="submit;" style="background-color: ##0077C0;">Check
                        now</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
