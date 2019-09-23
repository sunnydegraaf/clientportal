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

    @foreach ($products as $product)
        <div>
            <img {{$product->image_id}}>
            <img src="{{ $product->image_id }}">
            <h2>{{ $product->title }}</h2>
            <h3>{{ $product->description }}</h3>
            <p>{{ $product->price }}</p>
        </div>
    @endforeach

</body>
</html>