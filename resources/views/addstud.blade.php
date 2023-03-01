<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Newland University</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
        }

        .div-block {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .personal-side {
            background-color: #2DE2BE;
            width: 25%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            padding: 30px;
            width: 50%;
        }

        .textlabel {
            color: #2DE2BE;
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .tfield {
            width: 80%;
            height: 35px;
            border: none;
            border-bottom: 2px solid black;
            border-radius: 5px;
            background-color: #151515;
            color: white;
            padding-left: 10px;
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .nxt {
            color: #252525;
            background-color: #2DE2BE;
            padding: 15px;
            font-size: 1.2rem;
            border: none;
            border-radius: 10px;
            transition-duration: 0.2s;
        }

        .nxt:hover {
            transition-duration: 0.2s;
            box-shadow: 0px 0px 10px #2DE2BE;
        }
    </style>
</head>

<body style="background-color: #252525;">
    <div class="div-block" id="div1">
        <div class="personal-side">
            <div style="border:10px solid #252525;padding:10%;border-radius:30px;">
                <span style="font-size:4rem;color:#252525;">1</span>
            </div>
        </div>

        <div class="main-content">
            <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:10%;">Personal Information</p>
            <form method="POST" action="/add_stud" enctype="multipart/form-data" style="width:100%;">
                @csrf
                <div style="display:flex;flex-direction:column;width:100%;">
                    <x-input-label for="name" :value="__('Name')" class="textlabel" />

                    <x-text-input id="name" class="tfield" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div style="display:flex;flex-direction:column;width:100%;">
                    <x-input-label for="age" :value="__('Age')" class="textlabel" />

                    <x-text-input id="age" class="tfield" style="width:10%;" type="text" name="age" required autofocus />
                </div>
                <div style="display:flex;flex-direction:column;width:100%;">
                    <x-input-label for="gender" :value="__('Gender')" class="textlabel" />

                    <x-text-input id="gender" class="tfield" style="width:20%;" type="text" name="gender" required autofocus />
                </div>
                <div style="display:flex;flex-direction:column;width:100%;">
                    <x-input-label for="bloodgroup" :value="__('Blood Group')" class="textlabel" />

                    <x-text-input id="bloodgroup" class="tfield" type="text" name="bloodgroup" required autofocus />

                </div>

                <a href="#div2"><button class="nxt"> NEXT </button></a>
        </div>
    </div>
    <div class="div-block" id="div2">
        <div class="personal-side">
            <div style="border:10px solid #252525;padding:10%;border-radius:30px;">
                <span style="font-size:4rem;color:#252525;">2</span>
            </div>
        </div>

        <div class="main-content">
            <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:10%;">Contact Information</p>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="mobile" :value="__('Mobile')" class="textlabel" />

                <x-text-input id="mobile" class="tfield" type="text" name="mobile" required autofocus />
            </div>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="email" :value="__('Email')" class="textlabel" />

                <x-text-input id="email" class="tfield" type="email" name="email" :value="old('email')" required />
            </div>
            <div>
                <x-input-label for="last_school" :value="__('Last School')" class="textlabel" />

                <x-text-input id="last__school" class="tfield" type="text" name="last_school" required autofocus />
            </div>
            <a href="#div3"><button class="nxt"> NEXT </button></a>
        </div>
    </div>
    <div class="div-block" id="div3">
        <div class="personal-side">
            <div style="border:10px solid #252525;padding:10%;border-radius:30px;">
                <span style="font-size:4rem;color:#252525;">3</span>
            </div>
        </div>

        <div class="main-content">
            <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:10%;">Other details</p>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="dept_id" :value="__('Department')" class="textlabel" />

                <select name="dept_id" id="dept_id">
                    <option value="1">Introduction to Computer Science</option>
                    <option value="2">Bachelor's of Technology</option>
                    <option value="3">Master's of Technology</option>
                    <option value="4">Bachelor's of Computer Applications</option>
                    <option value="5">Master's of Computer Applications</option>
                    <option value="6">Bachelor's of Science in IT</option>
                    <option value="7">Master's of Science in IT</option>
                </select>
            </div>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="sem" :value="__('Semester')" class="textlabel" />

                <x-text-input id="sem" class="tfield" type="text" name="sem" required autofocus />

            </div>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="div" :value="__('Division')" class="textlabel" />

                <x-text-input id="div" class="tfield" type="text" name="div" required autofocus />
            </div>

            <div style="display:flex;flex-direction:column;width:100%;">
                <label for="pfp" class="textlabel">Kindly Upload Your Picture</label>
                <input type="file" id="exampleInputPassword1" name="pfp" style="color:white;margin-top:10px;margin-bottom:10px;">
            </div>
            <a href="#div4"><button class="nxt"> NEXT </button></a>
        </div>
    </div>
    <div class="div-block" id="div4">
        <div class="personal-side">
            <div style="border:10px solid #252525;padding:10%;border-radius:30px;">
                <span style="font-size:4rem;color:#252525;">3</span>
            </div>
        </div>

        <div class="main-content">
            <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:10%;">Credentials</p>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="password" :value="__('Password')" class="textlabel" />

                <x-text-input id="password" class="tfield" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="textlabel" />

                <x-text-input id="password_confirmation" class="tfield" type="password" name="password_confirmation" required />

            </div>

            <a style="text-decoration:none;color:grey;" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="nxt" style="margin-left:30px;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </div>
</body>

</html>