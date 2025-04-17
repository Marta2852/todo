<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrēties</title>
</head>
<body>
    <h1>Reģistrēties</h1>

    <form action="/register" method="POST">
    @csrf

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <div>
        <label for="first_name">Vārds:</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
    </div>

    <div>
        <label for="last_name">Uzvārds:</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
    </div>

    <div>
        <label for="email">E-pasts:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Parole:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Paroles konfirmācija:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div>
        <button type="submit">Reģistrēties</button>
    </div>
</form>


</body>
</html>