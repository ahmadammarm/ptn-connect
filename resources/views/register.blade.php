<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Register - Account</title>
    <style>
        /* Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(3616.jpg);
            background-position: center;
            background-size: cover;
        }

        .container {
            position: relative;
            max-width: 370px;
            width: 100%;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
        }

        .container header {
            font-size: 22px;
            font-weight: 600;
            color: black;
        }

        .container form {
            margin-top: 30px;
        }

        form .field {
            margin-bottom: 20px;
        }

        form .input-field {
            position: relative;
            height: 55px;
            width: 100%;
        }

        .input-field input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            border: 1px solid #d1d1d1;
            border-radius: 8px;
            padding: 0 15px;
        }

        .input-field .show-icon {
            position: absolute;
            right: 13px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            cursor: pointer;
            color: #919191;
            padding: 3px;
        }

        .input-field .show-icon:hover {
            color: #010101;
        }

        .field .error {
            display: flex;
            align-items: center;
            margin-top: 6px;
            color: red;
            font-size: 13px;
            display: none;
        }

        .error .error-icon {
            margin-right: 6px;
            font-size: 15px;
        }

        .create-password .error {
            align-items: flex-start;
        }

        .create-password .error-icon {
            margin-top: 4px;
        }

        .button {
            margin: 25px 0 6px;
        }

        .button input {
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            background-color: #242424;
            cursor: pointer;
            transition: all 0.3 ease;
        }

        .button input:hover {
            background-color: #010101;
        }

        .invalid .error {
            display: flex;
        }

        .invalid input {
            border-color: red;
        }

        @media screen and (max-width: 450px) {
            .container {
                max-width: 70%;
                margin: 0 10px;
            }
        }

        @media screen and (max-width: 576px) {
            .container {
                max-width: 50%;
                margin: 0 50px;
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                max-width: 50%;
                margin: 0 50px;
            }
        }

        @media screen and (max-width: 992px) {
            .container {
                max-width: 50%;
                margin: 0 50px;
            }
        }

        @media screen and (max-width: 1200px) {
            .container {
                max-width: 50%;
                margin: 0 50px;
            }
        }
    </style>
</head>

<!-- CSS -->
<!--<link rel="stylesheet" href="style2.css">-->

<!-- BoxIcons CSS -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

<body>
    <div class="container">
        <header>Register</header>
        <form action="{{ route('store') }}" method="GET">
            @csrf
            <div class="field">
                <div class="input-field">
                    <input type="text" placeholder="Username"
                        class="form-control @error('username') is-invalid @enderror" id="username" name="username"
                        value="{{ old('username') }}">
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="field email-field">
                <div class="input-field">
                    <input type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror"
                        id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="field">
                <div class="input-field">
                    <input type="password" placeholder="Create Password" class="form-control" id="password1" name="password1" value="{{ old('password1') }}">
                    <i class="bx bx-hide show-icon" id="showPassword"></i>
                    @error('password1')
                    <span class="text-danger">
                        <i class="bx bx-error-circle error-icon"></i>{{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="field">
                <div class="input-field">
                    <input type="password" placeholder="Confirm Password" class="form-control" id="password2" name="password2" value="{{ old('password2') }}">
                    <i class="bx bx-hide show-icon" id="showConfirmPassword"></i>
                    @error('password2')
                    <span class="text-danger">
                        <i class="bx bx-error-circle error-icon"></i>{{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="input-field button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
    <script>
        // Show/Hide Password
        document.getElementById('showPassword').addEventListener('click', function () {
            var passwordInput = document.getElementById('password1');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.classList.remove('bx-hide');
                this.classList.add('bx-show');
            } else {
                passwordInput.type = 'password';
                this.classList.remove('bx-show');
                this.classList.add('bx-hide');
            }
        });

        document.getElementById('showConfirmPassword').addEventListener('click', function () {
            var confirmPasswordInput = document.getElementById('password2');
            if (confirmPasswordInput.type === 'password') {
                confirmPasswordInput.type = 'text';
                this.classList.remove('bx-hide');
                this.classList.add('bx-show');
            } else {
                confirmPasswordInput.type = 'password';
                this.classList.remove('bx-show');
                this.classList.add('bx-hide');
            }
        });
    </script>

</body>

</html>
