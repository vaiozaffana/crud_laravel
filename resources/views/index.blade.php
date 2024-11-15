<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Form</title>
</head>
<body>
    <form action="/" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="name" name="name" id="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Password :</label><br>
        <input type="password" name="password"><br><br>
        <button>Submit</button>
    </form>

    @foreach ($author as $atr)
        <p>Name: {{ $atr->name }}</p>
        <p>Email: {{ $atr->email }}</p>
        <p>Password: {{ $atr->password }}</p>
        <a href="/edit/{{ $atr->id }}">
            <button>edit</button></a>
        <form action="/delete/{{ $atr->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
        </form>
    @endforeach
</body>
</html>