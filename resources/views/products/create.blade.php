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
<h1>Create a new project</h1>

<form method="post" action="/products">

    {{ csrf_field() }}

    <div>
        <input type="text" name="title" placeholder="Product title">
    </div>

    <div>
        <input type="number" name="price" placeholder="Product price">
    </div>

    <div>
        <textarea name="description" placeholder="Product description"></textarea>
    </div>

    <div>
        <button type="submit">Create product</button>
    </div>
</form>

</body>
</html>