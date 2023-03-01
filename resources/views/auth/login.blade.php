<html>

<head>
    <title>LOGIN</title>
    <style>
        *{
            font-family: Helvetica, sans-serif;
        }
        body {
            background-image: url("1.webp");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .main {
            width: 80%;
            height: 85%;
            background-color: white;
            position: absolute;
            left: 150px;
            top: 7%;
            box-shadow: 0px 0px 10px #252525;

        }

        .right {
            width: 50%;
            height: 100%;
            position: absolute;
            left: 50%;
        }

        .logo {
            width: 15%;
            height: 15%;
            position: absolute;
            left: 43%;
            top: 15%;
        }

        .p1 {
            font-weight: bold;
            font-size: 20px;
            position: absolute;
            left: 15%;
            top: 33%;
        }

        .inp1 {
            width: 60%;
            height: 8%;
            position: absolute;
            left: 18%;
            top: 41%;
            border-radius: 20px;
            padding-left:10px;
        }

        .p2 {
            font-weight: bold;
            font-size: 20px;
            position: absolute;
            left: 14%;
            top: 48%;
        }

        .inp2 {
            width: 60%;
            height: 8%;
            position: absolute;
            left: 18%;
            top: 56%;
            border-radius: 20px;
            padding-left:10px;
        }

        .lab {
            position: absolute;
            left: 18%;
            top: 65%;
            font-weight: bold;
        }

        .btn {
            width: 60%;
            height: 8%;
            background-color: #2DE2BE;
            border-radius: 20px;
            color: white;
            font-size: 20px;
            position: absolute;
            left: 20%;
            top: 75%
        }

        .btn:hover {
            background-color: lightskyblue;
            color: black;
        }

        .left {
            width: 50%;
            height: 100%;
            background-color: #2DE2BE;
            position: absolute;
        }

        .img1 {
            width: 35%;
            height: 25%;
            position: absolute;
            left: 30%;
            top: 10%;
            border-radius: 50px;
        }

        .img2 {
            width: 35%;
            height: 25%;
            position: absolute;
            left: 55%;
            top: 32%;
            border-radius: 50px;
        }

        .img3 {
            width: 35%;
            height: 25%;
            position: absolute;
            left: 30%;
            top: 52%;
            border-radius: 50px;
        }

        .h2 {
            color: white;
            position: absolute;
            text-align: center;
            left: 20%;
            top: 77%;
        }
    </style>
</head>

<body>
    <div class="main">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="right">
                <img src="images/logo.png" class="logo">
                <p class="p1">Email*</p>
                <input type="text" placeholder="mail@website.com" name="email" class="inp1"required autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <p class="p2">Password*</p>
                <input type="text" placeholder="Min.8 character" name="password" class="inp2" required
                    autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <div>
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
    
                    <div>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                <button class="btn">Login</button>

            </div>
            <div class="left">
                <img src="images/image.jpg" class="img1">
                <img src="images/image2.jpg" class="img2">
                <img src="images/image3.avif" class="img3">
                <h2 class="h2">Welcome to NewLand University</h2>
            </div>
        </form>
    </div>
</body>

</html>
