<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index List</h1>
    <a href="{{ route('blogs.create') }}">Create Blog</a>
    <ul>
        @foreach ($blogs as $blog)
            <li>{{ $blog->content }}
                <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                <br>
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>