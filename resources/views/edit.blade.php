<html>
<head>
    <title>Edit</title>
</head>
<body>
    <form action="/edit/{{ $author->id }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label><br>
    <input type="text" name="name" value="{{ $author->name }}"><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" value="{{ $author->email }}"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" value="{{ $author->password }}"><br><br>
    <button>Edit</button>
    </form>
</body>
</html>