<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .text {
            margin-top: 300px;
            align-items: center;
        }

        .img-home {
            width: 80%;
            margin-top: 120px;
            border-radius: 20px;
        }

        .gambar {
            height: 640px;
            align-items: center;
        }

        .data {
            margin-top: 20px;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    @extends('layout.master')
    @section('home', 'active')
    @section('content')

        @parent
        <main role="main" class="container bg-body">
            <section id="home" class="home">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-center bg-utama" align="center">
                            <h1>Selamat Datang </h1>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary btn-lg data" href="data.php"> Lanjutkan </a>
                            </div>
                        </div>
                        <div class="col d-flex flex-column justify-content-center justify-content-lg-start gambar">
                            <img class="img-home shadow" src="home.png">
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endsection
</body>

</html>
