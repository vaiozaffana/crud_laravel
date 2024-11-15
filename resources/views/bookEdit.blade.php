<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category CRUD</title>
</head>
<body>
    <form action="/bookEdit/{{ $book->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label><br>
        <input type="text" name="title" value="{{ $book->title }}"><br>
        <button>Edit</button>
        </form>
</body>
</html>