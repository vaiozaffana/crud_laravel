<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
</head>
<body>
    <form action="/book" method="POST">
        @csrf
        <label for="title">Title :</label>
        <input type="text" name="title" id="title" required><br>

        <label for="author_id">Author: </label>
        <select name="author" id="author_id">
            @foreach ($author as $atr)
                <option value="{{ $atr->id }}">{{ $atr->name }}</option>
            @endforeach
        </select><br>

        <label for="category_id">Category: </label>
        <select name="category" id="category_id">
            @foreach ($category as $ctg)
                <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Submit</button>
    </form>

    @foreach ($book as $bk)
        <p>Title: {{ $bk->title }}</p>
        <p>Category Name: {{ $bk->ctg->name }}</p>
        <p>Author Name: {{ $bk->atr->name }}</p>
        <p>Author Email: {{ $bk->atr->email }}</p>
        <a href="/bookEdit/{{ $bk->id }}">
            <button>Edit</button>
        </a>
        <form action="/bookDelete/{{ $bk->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    @endforeach
</body>
</html>