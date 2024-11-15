<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category CRUD</title>
</head>
<body>
    <form action="/categoryEdit/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="{{ $category->name }}"><br>
        <button>Edit</button>
        </form>
</body>
</html>