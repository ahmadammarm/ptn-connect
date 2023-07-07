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

        .tombol {
            padding-bottom: 50px;
        }
    </style>
</head>

<body>
    @extends('layout.master')
    @section('isi', 'active')
    @section('content')

        <main role="main" class="flex-shrink-0">
            @if($errors->any())

            @endif
            <div class="container mt-5 data">
                <form method="POST" action="{{ route('data.store') }}">
                    @csrf
                    <h2 align="center"> Data Pengguna</h2>
                    <h4 class="mt-5" align="left">Data Diri</h4>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nama" class="form-label">Nama Lengkap:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="asal" class="form-label">Asal Sekolah:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('asal') is-invalid @enderror" id="asal" name="asal" value="{{ old('asal') }}">
                            @error('asal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="jurusan" class="form-label">Jurusan:</label>
                        </div>
                        <div class="col">
                            <select class="jurusan form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan">
                                <option selected disabled value=""> --PILIH JURUSAN-- </option>
                                <option value="IPA" {{ old('jurusan') == 'IPA' ? 'checked' : '' }}> IPA </option>
                                <option value="IPS" {{ old('jurusan') == 'IPS' ? 'checked' : '' }}> IPS </option>
                                <option value="BAHASA" {{ old('jurusan') == 'BAHASA' ? 'checked' : '' }}> BAHASA </option>
                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <h4 class="mt-5" align="left">Nilai</h4>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai1" class="form-label">Matematika:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai1') is-invalid @enderror" id="nilai1" name="nilai1" value="{{ old('nilai1') }}">
                            @error('nilai1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai2" class="form-label">Bahasa Indonesia:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai2') is-invalid @enderror" id="nilai2" name="nilai2" value="{{ old('nilai2') }}">
                            @error('nilai2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai3" class="form-label">Bahasa Inggris:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai3') is-invalid @enderror" id="nilai3" name="nilai3" value="{{ old('nilai3') }}">
                            @error('nilai3')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai4" class="form-label">Fisika:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai4') is-invalid @enderror" id="nilai4" name="nilai4" value="{{ old('nilai4') }}">
                            @error('nilai4')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai5" class="form-label">Kimia:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai5') is-invalid @enderror" id="nilai5" name="nilai5" value="{{ old('nilai5') }}">
                            @error('nilai5')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai6" class="form-label">Biologi:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai6') is-invalid @enderror" id="nilai6" name="nilai6" value="{{ old('nilai6') }}">
                            @error('nilai6')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai7" class="form-label">Sejarah:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai7') is-invalid @enderror" id="nilai7" name="nilai7" value="{{ old('nilai7') }}">
                            @error('nilai7')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai8" class="form-label">Ekonomi:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai8') is-invalid @enderror" id="nilai8" name="nilai8" value="{{ old('nilai8') }}">
                            @error('nilai8')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai9" class="form-label">Sosiologi:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai9') is-invalid @enderror" id="nilai9" name="nilai9" value="{{ old('nilai9') }}">
                            @error('nilai9')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label for="nilai10" class="form-label">Geografi:</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nilai10') is-invalid @enderror" id="nilai10" name="nilai10" value="{{ old('nilai10') }}">
                            @error('nilai10')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <h4 class="mt-5" align="left">Kuesioner</h4>
                        <div class="row mt-4">
                            <div class="col-2">
                                <label for="bidang" class="form-label">Bidang yang disukai:</label>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Seni" {{ old('bidang') && in_array('Seni', old('bidang')) ? 'checked' : '' }}> Seni </p>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Teknologi" {{ old('bidang') && in_array('Teknologi', old('bidang')) ? 'checked' : '' }}> Teknologi </p>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Sejarah" {{ old('bidang') && in_array('Sejarah', old('bidang')) ? 'checked' : '' }}> Sejarah </p>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Bisnis" {{ old('bidang') && in_array('Bisnis', old('bidang')) ? 'checked' : '' }}> Bisnis </p>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Sastra" {{ old('bidang') && in_array('Sastra', old('bidang')) ? 'checked' : '' }}> Sastra </p>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Olahraga" {{ old('bidang') && in_array('Olahraga', old('bidang')) ? 'checked' : '' }}> Olahraga </p>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Sosial" {{ old('bidang') && in_array('Sosial', old('bidang')) ? 'checked' : '' }}> Sosial </p>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" name="bidang[]" value="Hukum" {{ old('bidang') && in_array('Hukum', old('bidang')) ? 'checked' : '' }}> Hukum </p>
                                    </div>
                                </div>
                                @error('bidang')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                                <label for="cita" class="form-label">Cita-Cita:</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control @error('cita') is-invalid @enderror" id="cita" name="cita" value="{{ old('cita') }}">
                                @error('cita')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                                <label for="univ" class="form-label">Universitas pilihan:</label>
                            </div>
                            <div class="col">
                                <select class="univ form-control @error('univ') is-invalid @enderror" id="univ" name="univ">
                                    <option checked value=""> --PILIH UNIVERSITAS-- </option>
                                    <option value="Universitas Negeri Malang" {{ old('univ') == 'um' ? 'checked' : '' }}> Universitas Negeri Malang </option>
                                    <option value="Universitas Brawijaya" {{ old('univ') == 'ub' ? 'checked' : '' }}> Universitas Brawijaya</option>
                                    <option value="Universitas Indonesia" {{ old('univ') == 'ui' ? 'checked' : '' }}> Universitas Indonesia </option>
                                    <option value="Universitas Gajah Mada" {{ old('univ') == 'ugm' ? 'checked' : '' }}> Universitas Gajah Mada </option>
                                    <option value="Universitas Diponegoro" {{ old('univ') == 'undip' ? 'checked' : '' }}> Universitas Diponegoro </option>
                                    <option value="Universitas Airlangga" {{ old('univ') == 'unair' ? 'checked' : '' }}> Universitas Airlangga </option>
                                    <option value="Universitas Negeri Surabaya" {{ old('univ') == 'unesa' ? 'checked' : '' }}> Universitas Negeri Surabaya </option>
                                    <option value="Institut Teknologi Bandung" {{ old('univ') == 'itb' ? 'checked' : '' }}> Institut Teknologi Bandung</option>
                                    <option value="Institut Pertanian Bogor" {{ old('univ') == 'ipb' ? 'checked' : '' }}> Institut Pertanian Bogor </option>
                                </select>
                                @error('univ')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                                <label for="prodi1" class="form-label">Prodi pilihan pertama:</label>
                            </div>
                            <div class="col">
                                <select class="prodi1 form-control  @error('prodi1') is-invalid @enderror" id="prodi1" name="prodi1">
                                    <option value=""> --PILIH PRODI PERTAMA-- </option>
                                    <option value="Teknik Informatika" {{ old('prodi1') == 'ti' ? 'checked' : '' }}> Teknik Informatika</option>
                                    <option value="Sistem Informasi" {{ old('prodi1') == 'si' ? 'checked' : '' }}> Sistem Informasi</option>
                                    <option value="Teknologi Informasi" {{ old('prodi1') == 'it' ? 'checked' : '' }}> Teknologi Informasi</option>
                                    <option value="Desain Komunikasi Visual" {{ old('prodi1') == 'dkv' ? 'checked' : '' }}> Desain Komunikasi Visual</option>
                                    <option value="Hubungan Internasional" {{ old('prodi1') == 'hi' ? 'checked' : '' }}> Hubungan Internasional</option>
                                    <option value="Kedokteran" {{ old('prodi1') == 'fk' ? 'checked' : '' }}> Kedokteran </option>
                                    <option value="Hukum" {{ old('prodi1') == 'hk' ? 'checked' : '' }}> Hukum </option>
                                    <option value="Ekonomi Bisnis" {{ old('prodi1') == 'eb' ? 'checked' : '' }}> Ekonomi Bisnis</option>
                                </select>
                                @error('prodi1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-2">
                                <label for="prodi2" class="form-label">Prodi pilihan kedua:</label>
                            </div>
                            <div class="col">
                                <select class="prodi2 form-control @error('prodi2') is-invalid @enderror" id="prodi2" name="prodi2">
                                    <option checked value=""> --PILIH PRODI KEDUA-- </option>
                                    <option value="Teknik Informatika" {{ old('prodi2') == 'ti' ? 'checked' : '' }}> Teknik Informatika</option>
                                    <option value="Sistem Informasi" {{ old('prodi2') == 'si' ? 'checked' : '' }}> Sistem Informasi</option>
                                    <option value="Teknologi Informasi" {{ old('prodi2') == 'it' ? 'checked' : '' }}> Teknologi Informasi</option>
                                    <option value="Desain Komunikasi Visual" {{ old('prodi2') == 'dkv' ? 'checked' : '' }}> Desain Komunikasi Visual</option>
                                    <option value="Hubungan Internasional" {{ old('prodi2') == 'hi' ? 'checked' : '' }}> Hubungan Internasional</option>
                                    <option value="Kedokteran" {{ old('prodi2') == 'fk' ? 'checked' : '' }}> Kedokteran </option>
                                    <option value="Hukum" {{ old('prodi2') == 'hk' ? 'checked' : '' }}> Hukum </option>
                                    <option value="Ekonomi Bisnis" {{ old('prodi2') == 'eb' ? 'checked' : '' }}> Ekonomi Bisnis</option>
                                </select>
                                @error('prodi2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row tombol mt-4">
                            <div class="col-1">
                                <button type="reset" class="btn btn-danger" name="hapus"> Hapus </a> </button>
                            </div>
                            <div class="col-7">
                                <button type="submit" class="btn btn-primary" name="simpan"> <a> Simpan </a> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>

        @parent
    @endsection
</body>

</html>
