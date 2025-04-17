<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Pieslēgšanās</h1>

<form action="/login" method="POST">
    @csrf

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <div>
        <label for="email">E-pasts:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Parole:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <button type="submit">Pieslēgties</button>
    </div>
</form>

</body>
</html>