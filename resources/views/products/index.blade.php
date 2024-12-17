<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                Price: ${{ $product->price }}<br>
                Description: {{ $product->description }}<br>
                <img src="{{ $product->image }}" alt="{{ $product->name }}" width="150">
            </li>
        @endforeach
    </ul>
</body>
</html>
