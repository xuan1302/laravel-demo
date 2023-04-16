<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/home/styles/login.css')}}">
</head>
<body>
    <div class="content">
        <div class="overlay">
            <form action="{{route('home.post.login')}}" method="post">
                {{@csrf_field()}}
                <div class="con">
                    <header class="head-form">
                        @if(session('success'))
                            <h4>{{session('success')}}</h4>
                        @endif
                        <h2>Log In</h2>
                        <p>Login here using your username and password</p>
                    </header>
                    <div class="field-set">
                        @error('email')
                            <span class="red">
                                {{$message}}
                            </span>
                        @enderror
                        <input class="form-input" id="txt-input" type="text" placeholder="Email" name="email" />
                        @error('password')
                        <span class="red">
                                {{$message}}
                            </span>
                        @enderror
                        <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" />
                        <button class="log-in" type="submit"> Log In </button>
                    </div>
                    <div class="other" style="width: 100%">
                        <a href="{{route('home.register')}}" class="btn submits sign-up">Sign Up </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
