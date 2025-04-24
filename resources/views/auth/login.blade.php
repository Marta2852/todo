<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieslēgšanās</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <x-navigation />

    <div class="form-container">
        <h1 style="text-align: center; color: #ffb6c1;">Pieslēgšanās</h1>

        @if ($errors->any())
            <ul style="color: #ff4d4d; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/login" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">E-pasts:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="input-field">
            </div>

            <div class="form-group">
                <label for="password">Parole:</label>
                <input type="password" id="password" name="password" required class="input-field">
            </div>

            <button type="submit" class="submit-button">Pieslēgties</button>
        </form>

        <p style="text-align: center; margin-top: 15px;">
            Nav konta? <a href="/register">Reģistrēties</a>
        </p>
    </div>
</body>
</html>
