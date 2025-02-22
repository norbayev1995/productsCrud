<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<h1>Create Products</h1>
<form action="{{ route('products.update', ['product' => $product]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $product->name }}">
    <input type="number" name="price" placeholder="Price" value="{{ $product->price }}">
    <button type="submit">Submit</button>
</form>
</body>
</html>
