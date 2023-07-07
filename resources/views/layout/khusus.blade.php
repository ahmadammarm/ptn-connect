<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sitem Informasi Mahasiswa')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');

        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .navbar {
            background-color: #2124B1 ;
            justify-content: space-between;
        }

        .container .navbar-nav .nav-link {
            color: #fff
        }

        footer {
            text-align: center;

        }

        footer {
            background-color: #2124B1 ;
        }

        footer .container {
            color: #fff;
        }

        .navbar-brand {
            font-weight: bold;
            font-family: 'Satisfy';
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-nav shadow-sm ms-auto">
        <div class="container">
            <a class="navbar-brand" href="home">PTN-Connect</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active navbar-right" href="profil">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @section('content')
    @show
    <footer class="py-3 text-black mt-3 shadow-sm">
        <div class="container">
            Copyright © 2023 Kelompok 2 - TI A
        </div>
    </footer>
</body>
</body>

</html>
