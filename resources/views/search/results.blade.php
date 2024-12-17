{{-- resources/views/search/results.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <ul>
        @foreach($results as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                {{ $product->description }}<br>
                Price: ${{ $product->price }}
            </li>
        @endforeach
    </ul>
</body>
</html>
