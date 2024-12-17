<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <style>
        body {
            background-color: #3e3e3e;
            color: white;
            font-family: "IBM Plex Sans", serif;
            margin: 0;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow-y: scroll;
        }

        h1 {
            font-size: 2rem;
            margin-top: 40px;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        form {
            margin-bottom: 30px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }

        li {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        li:hover {
            transform: translateY(-5px);
        }

        strong {
            font-size: 1.2rem;
        }

        img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .product-info {
            margin-top: 10px;
        }

        .price {
            font-size: 1.1rem;
            color: #f9a825;
            font-weight: bold;
        }

        .description {
            font-size: 1rem;
            color: #b0bec5;
        }

        .footer {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        /* Responsive Adjustments */
    @media (max-width: 768px) {
        ul {
            grid-template-columns: 1fr;
            gap: 15px;
        }
    }
    </style>
</head>
<body>
    <div>
        <h1>Product List</h1>

        <!-- Search Form -->
        <form method="GET" action="{{ route('products.index') }}">
            <input 
                type="text" 
                name="search" 
                placeholder="Search products..." 
                value="{{ request('search') }}" 
                style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;"
            >
            <button type="submit" style="padding: 8px 12px; border-radius: 5px; border: none; background-color: #f9a825; color: white; cursor: pointer;">
                🔍 Search
            </button>
        </form>

        <ul>
            @foreach ($products as $product)
                <li>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                    <strong>{{ $product->name }}</strong>
                    <div class="product-info">
                        <p class="price">${{ $product->price }}</p>
                        <p class="description">{{ $product->description }}</p>
                    </div>
                </li>
            @endforeach
        </ul>

        @if($products->isEmpty())
            <p>No products found matching your search.</p>
        @endif

        <div class="footer">
            Copyright@laravel-test 2024
        </div>
    </div>

    
</body>
</html>
