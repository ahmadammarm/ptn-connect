<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document </title>
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

        .container-hasil {
            border: 3px;
        }
    </style>
</head>

<body>
    @extends('layout.khusus')
    @section('hasil', 'active')
    @section('content')
        @parent
        <div class="container mt-5">
            <h2 align="center"> Hasil Inputan Pengguna</h2>
            <form method="post" action="">
                <h4 class="mt-5" align="left">Data Diri</h4>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nama" class="form-label">Nama Lengkap :</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nama}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="asal" class="form-label">Asal Sekolah :</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->asal}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="jurusan" class="form-label">Jurusan :</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->jurusan}}</p>
                    </div>
                </div>
                <h4 class="mt-5" align="left">Nilai</h4>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai1" class="form-label">Matematika:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai1}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai2" class="form-label">Bahasa Indonesia:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai2}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai3" class="form-label">Bahasa Inggris:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai3}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai4" class="form-label">Fisika:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai4}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai5" class="form-label">Kimia:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai5}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai6" class="form-label">Biologi:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai6}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai7" class="form-label">Sejarah:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai7}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai8" class="form-label">Ekonomi:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai8}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai9" class="form-label">Sosiologi:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai9}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai10" class="form-label">Geografi:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->nilai10}}</p>
                    </div>
                </div>

                <h4 class="mt-5" align="left">Kuisoner</h4>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="bidang" class="form-label">Bidang yang disukai:</label>
                    </div>
                    <div class="col">
                        <div class="row">
                            <p>{{$data_pengguna->bidang}}</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="cita" class="form-label">Cita-Cita:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->cita}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="univ" class="form-label">Universitas pilihan:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->univ}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="prodi1" class="form-label">Prodi pilihan pertama:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->prodi1}}</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="prodi2" class="form-label">Prodi pilihan kedua:</label>
                    </div>
                    <div class="col">
                        <p>{{$data_pengguna->prodi2}}</p>
                    </div>
                </div>
                <br>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="h4 pb-2 mb-4 text-primary border-primary">
                            <h4> Hasil Prediksi </h4>
                        </div>
                        <div class="h4 pb-2 mb-4 border-bottom">
                            <div style="color:{{ $color }}">
                                {{ $status }}
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>

        @parent
    @endsection
</body>

</html>
