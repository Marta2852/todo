<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Veicamie uzdevumi</title>
</head>
<body>
<x-navigation></x-navigation>

<h1>Visi veicamie uzdevumi</h1>
<ul>
  @foreach ($todos as $todo)
    <li>{{ $todo->content }}</li>
  @endforeach
</ul>
    
</body>
</html>