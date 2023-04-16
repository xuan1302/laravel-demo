<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
</head>
<body>
Home
    @if(\Illuminate\Support\Facades\Auth::check())
        <form action="{{route('home.logout')}}" method="get">
            <input type="submit" value="Logout">
        </form>
        @endif
</body>
</html>
