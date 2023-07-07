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
    @extends('layout.master')
    @section('hasil', 'active')
    @section('content')
        <div class="container mt-5">
            <h2 align="center"> Hasil Inputan Pengguna</h2>
            <form method="POST" action="">
                @csrf
                <h4 class="mt-5" align="left">Data Diri</h4>
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
                        <label for="asal" class="form-label">Asal Sekolah :</label>
                    </div>
                    <div class="col">
                        <p>SMA Negeri 1 Sidayu</p>
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
                <h4 class="mt-5" align="left">Nilai</h4>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai1" class="form-label">Matematika:</label>
                    </div>
                    <div class="col">
                        <p>88</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai2" class="form-label">Bahasa Indonesia:</label>
                    </div>
                    <div class="col">
                        <p>91</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai3" class="form-label">Bahasa Inggris:</label>
                    </div>
                    <div class="col">
                        <p>91</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai4" class="form-label">Fisika:</label>
                    </div>
                    <div class="col">
                        <p>85</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai5" class="form-label">Kimia:</label>
                    </div>
                    <div class="col">
                        <p>85</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai6" class="form-label">Biologi:</label>
                    </div>
                    <div class="col">
                        <p>89</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai7" class="form-label">Sejarah:</label>
                    </div>
                    <div class="col">
                        <p>80</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai8" class="form-label">Ekonomi:</label>
                    </div>
                    <div class="col">
                        <p>81</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai9" class="form-label">Sosiologi:</label>
                    </div>
                    <div class="col">
                        <p>79</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="nilai10" class="form-label">Geografi:</label>
                    </div>
                    <div class="col">
                        <p>80</p>
                    </div>
                </div>

                <h4 class="mt-5" align="left">Kuisoner</h4>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="bidang" class="form-label">Bidang yang disukai:</label>
                    </div>
                    <div class="col">
                        <div class="row">
                            <p>Olahraga</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="cita" class="form-label">Cita-Cita:</label>
                    </div>
                    <div class="col">
                        <p>Presiden</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="univ" class="form-label">Universitas pilihan:</label>
                    </div>
                    <div class="col">
                        <p>Universitas Negeri Malang</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="prodi1" class="form-label">Prodi pilihan pertama:</label>
                    </div>
                    <div class="col">
                        <p>Teknik Informatika</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label for="prodi2" class="form-label">Prodi pilihan kedua:</label>
                    </div>
                    <div class="col">
                        <p>Teknik Informatika</p>
                    </div>
                </div>

                <div class="row tombol mt-4">
                    <div class="col-2">
                        <button class="btn btn-primary" name="updatedata"> Update Data</button>
                    </div>
                    <div class="col-7">
                        <button class="btn btn-primary" name="hapusdata"> Hapus Data </button>
                    </div>
                </div>
                <br>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="h4 pb-2 mb-4 text-primary border-primary">
                            <h4> Hasil Prediksi </h4>
                        </div>
                        <div class="h4 pb-2 mb-4 text-success border-bottom">
                            <p>{{$status}}</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>

    </body>

    </html>
@stop
