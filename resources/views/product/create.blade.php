<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create New Products</h1>
    <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" id="">
    <input type="submit" value="Add">
    </form>
</body>
</html>