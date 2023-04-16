<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/admin/styles/login.css')}}">
</head>
<body>
    <div id="loginform">
        <h2 id="headerTitle">Login</h2>
        @if (session('status'))
            <div class="alert alert-success" style="text-align: center;color: red;">
                {{ session('status') }}
            </div>
        @endif
        <div>
            <form action="{{route('admin.post.login')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="row">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
                <div id="button" class="row">
                    <button type="submit">Log in</button>
                </div>
            </form>
        </div>
        <div id="alternativeLogin">
            <label>Or sign in with:</label>
            <div id="iconGroup">
{{--                <a href="#" id="facebookIcon"></a>--}}
{{--                <a href="#" id="twitterIcon"></a>--}}
{{--                <a href="#" id="googleIcon"></a>--}}
            </div>
        </div>
    </div>
</body>
</html>
