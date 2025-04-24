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


    @guest
        <div class="auth-container">
            <p>Sveiks, viesi!</p>
        </div>
    @endguest
</body>
</html>