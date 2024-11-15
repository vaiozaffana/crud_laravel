<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Form</title>
</head>
<body>
    <form action="/category" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="name" name="name" id="name" required>
        <button>Submit</button>
    </form>

    @foreach ($category as $ctg)
        <p>Name: {{ $ctg->name }}</p>
        <a href="/categoryEdit/{{ $ctg->id }}">
            <button>edit</button></a>
        <form action="/categoryDelete/{{ $ctg->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
        </form>
    @endforeach
</body>
</html>