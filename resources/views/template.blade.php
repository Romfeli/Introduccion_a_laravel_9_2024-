<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
</head>
<body>
    <p>

    <a href="{{ Route('home') }}">Home</a>
    <a href="{{ Route('blog') }}">Blog</a>

        @auth
            
        <a href="{{Route('dashboard')}}">Dashboard</a>

        @else
        <a href="{{Route('login')}}">Login</a>

        @endauth

    </p>
<hr>



@yield('content')

  
</body>
</html>