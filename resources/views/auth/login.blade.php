<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href= rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Login - Account</title>
    <style>
        /* Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
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
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
        }

        .form {
            position: absolute;
            background: #fff;
            border-radius: 6px;
            max-width: 430px;
            width: 100%;
            padding: 40px;
        }


        header {
            font-size: 28px;
            font-weight: 600;
            text-align: center;
        }

        .form .field {
            height: 45px;
            width: 100%;
            margin-top: 15px;
            position: relative;
            border-radius: 6px;
        }

        .field input,
        .field button {
            height: 100%;
            width: 100%;
            border: none;
            font-size: 16px;
            font-weight: 400;
            border-radius: 6px;
        }

        .field input {
            border: 1px solid #cacaca;
            padding: 0 15px;
            outline: none;
        }

        .field input:focus {
            border-bottom-width: 2px;
        }

        .eye-icon {
            font-size: 18px;
            color: #8b8b8b;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            padding: 5px;
        }

        .eye-icon:hover {
            color: rgb(58, 58, 58);
        }

        .form-link {
            text-align: center;
            margin-top: 10px;
        }

        .form-link span,
        .form-link a {
            font-size: 14px;
            font-weight: 400;
        }

        .form a {
            text-decoration: none;
            color: #0171d3;
        }

        .form-content a:hover {
            text-decoration: underline;
        }

        .field.input-field .login {
            background-color: #242424;
            cursor: pointer;
            font-weight: 500;
            color: #fff;
        }

        .field.input-field .login:hover {
            background-color: #000000;
        }

        .line {
            position: relative;
            height: 1px;
            width: 100%;
            margin: 25px 0;
            background-color: #cacaca;
        }

        .line::before {
            content: "OR";
            position: absolute;
            top: 50%;
            left: 50%;
            color: #8b8b8b;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 0 15px;
        }

        .media-options a {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        a.facebook {
            background-color: #4267b2;
            color: #fff;
            text-decoration: none;
        }

        a.facebook:hover {
            background-color: #004888;
        }

        a.facebook .facebook-icon {
            height: 28px;
            width: 28px;
            color: #0171d3;
            font-size: 20px;
            background-color: #fff;
            display: flex;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
        }

        .facebook-icon,
        img.google-img {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
        }

        img.google-img {
            height: 20px;
            width: 20px;
            object-fit: cover;
        }

        a.google {
            border: 1px solid #cacaca;
        }

        a.google:hover {
            background-color: #d6d6d6;
        }

        a.google span {
            font-weight: 500;
            opacity: 0.6;
            color: #000;
        }
        .text-danger{
            color:red;
        }
        div{
            margin-top: 10px;
            margin-bottom: 30px;
        }

    </style>
    <!-- -->
</head>
<body>
    <section class="container forms">
        <!-- Login Forms -->
        <div class="form login">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-content">
                    <header>Login</header>
                    <div class="field input-field">
                        <label for="email">Email Address</label>
                        <input type="email" class="input @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field input-field">
                        <label for="password">Password</label>
                        <input type="password" class="input @error('password') is-invalid @enderror" id="password" name="password" required>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-link">
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>
                    <div class="field input-field">
                        <button type="submit" class="login">Login</button>
                    </div>
                </div>
            </form>
            <div class="line"></div>
            <div class="media-options">
                <a href="#" class="field facebook" aria-label="Login with Facebook">
                    <i class="bx bxl-facebook facebook-icon"></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="2991148.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
            <div class="form-link">
                <span>Don't have an account? <a href="{{ route('register') }}" class="link signup-link">Sign up</a></span>
            </div>
        </div>
    </section>
</body>
</html>
