<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    @extends('layout.master')
    @section('isi', 'active')
    @section('content')

        <main role="main" class="flex-shrink-0">
            <div class="container mt-5 data">
                <form action="" method="GET">
                    <h2 align="center"> Profil Pengguna</h2>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nama" class="form-label">Nama Lengkap :</label>
                        </div>
                        <div class="col">
                            <p>Dimas Maulana Ramadhan</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nama" class="form-label">Username :</label>
                        </div>
                        <div class="col">
                            <p>John Smith</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="asal" class="form-label">Email :</label>
                        </div>
                        <div class="col">
                            <p>radhin123@gmail.com</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="asal" class="form-label">Asal Sekolah :</label>
                        </div>
                        <div class="col">
                            <p>SMA Negeri 1 SIDAYU</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="jurusan" class="form-label">Jurusan :</label>
                        </div>
                        <div class="col">
                            <p>IPA</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <button class="btn btn-primary" name="edit"> Edit </button>
                            <button class="btn btn-danger" name="logout"> Logout </button>
                        </div>
                    </div>
                </form>
            </div>
        </main>

        @parent
    @endsection
</body>

</html>
