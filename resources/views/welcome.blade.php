<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <x-navigation></x-navigation>
    <h1>Sveiks, Laravel!</h1>

    @auth
        <p>Sveiks, {{ Auth::user()->first_name}}</p>
        

        <form action="/logout" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Izrakstīties</button>
        </form>
    @endauth

    @guest
        <p>Sveiks, viesi!</p>
        <a href="/login">Pieslēgties</a>
    @endguest
</body>
</html>