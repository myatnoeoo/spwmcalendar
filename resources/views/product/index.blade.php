<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products List</h1>
<a href="{{ route('products.create') }}">Create New Product</a>
    <ul>
    @foreach ($products as $product)
    <li>{{$product->name}} <a href="{{route('products.edit',$product->id)}}">Edit</a></li>
    @endforeach
    </ul>
</body>
</html>