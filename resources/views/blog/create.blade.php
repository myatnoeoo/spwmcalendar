<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <input type="text" name="content">
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>