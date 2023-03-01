<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .nav-content {
            width: 100%;
            height: 50px;
            position: fixed;
            top: 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .name {
            font-family: Helvetica, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 15%;
            height: 100%;
            font-size: 1rem;
        }

        .menu {
            font-family: 'Outfit', sans-serif;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 25%;
            height: 100%;
        }

        .menuitem {
            list-style-type: none;
            transition-duration: .2s;
            font-family: Helvetica;
            font-size: 1.1rem;
        }

        .menuitem:hover {
            color: #2DE2BE;
            cursor: pointer;
            transition-duration: .2s;
            font-weight: bold;
        }

        .automenuitem {
            color: #2DE2BE;
            cursor: pointer;
            transition-duration: .2s;
        }

        a:link {
            color: inherit;
        }

        a {
            text-decoration: none;
        }

        .head-btn {
            padding: 5px;
            border: none;
            border-radius: 50px;
            margin-right: 10px;
            width: 90%;
            font-size: 0.9rem;
            transition-duration: 0.2s;
        }

        .head-btn:hover {
            border: 2px solid #2DE2BE;
            color: #2DE2BE;
            background-color: #252525;
            transition-duration: 0.2s;
        }

        .leader {
            width: 100%;
            height: 100vh;
        }


        .inncontent {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .headding {
            color: white;
            font-size: 4rem;
            font-family: Helvetica;
            filter: drop-shadow(0px 0px 2px black);
        }

        .subdata {
            font-family: Helvetica;
            filter: drop-shadow(0px 0px 1px black);
            color: #2DE2BE;
            font-size: 1rem;
            width: 40%;
            text-align: center;
        }

        .footer {
            width: 100%;
            height: 100%;
            background-color: black;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            padding-top: 20px;
        }

        .fcon {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            width: fit-content;
        }

        .f1 {
            color: white;
            font-family: Helvetica, sans-serif;
            margin-top: 3%;
        }

        .footer {
            width: 100%;
            background-color: black;
        }

        .footer .col {
            width: 190px;
            height: auto;
            float: left;
            box-sizing: border-box;
            padding: 20px;
        }

        .footer .col h2 {
            margin: 0;
            padding: 0;
            font-size: 15px;
            line-height: 17px;
            padding: 10px 0;
            color: #2DE2BE;
            text-transform: uppercase;
        }

        .footer .col ul {
            list-style-type: none;
            padding: 0;
        }

        .footer .col ul li {
            color: white;
            font-size: 12px;
            padding: 5px 0px;
        }

        .address ul li {
            display: inline-block;
            padding-right: 5px !important;
        }

        .footer .col ul li:hover {
            cursor: pointer;
            color: lightgray;
            font-weight: bold;
        }

        .clearfix {
            clear: both;
        }
    </style>


    @yield('homestyle')

</head>

<body style="background-color: #252525;">
    <nav>
        <div class="nav-content">
            <div class="name">
                <img src="/images/logo.png" style="width:15%;margin-right:10px;">
                <span style="font-size:1.2rem;">Newland <br /> University</span>
            </div>

            <div class="menu">
                <li class="menuitem" id="home"> <a href="#headdiv"> Home</a></li>
                <li class="menuitem" id="Education"><a href="#edu-inject">Education</a></li>
                <li class="menuitem" id="Contact us"><a href="#skillset">Contact Us</a></li>
                <li class="menuitem" id="About Us"><a href="#work-div-1">About Us</a></li>
            </div>

            <div class="name" style="font-family: 'Outfit', sans-serif;">
                @if (Route::has('login'))
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="head-btn">
                        {{ __('Log Out') }}
                    </button>
                </form>

                @else
                <a href="{{ route('login') }}" class="head-btn">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="head-btn">Register</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </nav>
    @yield('homecontent')
    <footer>
        <div class="footer" style="margin-top: 5%;">
            <div class="contain">
                <div class="col">
                    <h2>NewLand University</h2>
                    <ul>
                        <li>About us</li>
                        <li> Our Mission</li>
                        <li>Services</li>
                    </ul>
                </div>
                <div class="col">
                    <h2>Acedemics</h2>
                    <ul>
                        <li>Courses</li>
                        <li>Class</li>
                        <li>Chapter</li>
                    </ul>
                </div>
                <div class="col">
                    <h2>Faculty</h2>
                    <ul>
                        <li>Teachers</li>
                        <li>HODs</li>
                        <li>Trustees</li>
                    </ul>
                </div>
                <div class="col">
                    <h2>Resources</h2>
                    <ul>
                        <li>Study</li>
                        <li>Projects</li>
                        <li>Works</li>
                    </ul>
                </div>
                <div class="col">
                    <h2>Contact</h2>
                    <ul>
                        <li>+91 9051 XXXXXX</li>
                        <li>033 2464 XXXX</li>
                        <li>newland@gmail.com</li>
                    </ul>
                </div>
                <div class="col address">
                    <h2>Address </h2>
                    <ul>
                        <li>Sky Towers, Service Road, Ahmedabad</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>