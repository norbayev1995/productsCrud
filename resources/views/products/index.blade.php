<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
<h1>Products</h1>
<a href="{{ route('products.create') }}">Create</a>
<table>
    <thead>
    <th>#</th>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
    </thead>
    <tbody>
    @forelse($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.edit', ['product' => $product]) }}">Edit</a>
                <a href="{{ route('products.show', ['product' => $product]) }}">Show</a>
                <form action="{{ route('products.destroy', ['product' => $product->id]) }}" style="display: inline-block" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <h4>Nothing</h4>
    @endforelse
    </tbody>
</table>
</body>
</html>
