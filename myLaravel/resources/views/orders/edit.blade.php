<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<h1>update item</h1>
    <form method="post" action="/myLaravel/public/orders/{{$orderid}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT"/>
        <input type="number" name="userid" placeholder="userid" />
        <input type="text" name="products" placeholder="products" />
        <input type="number" name="Price" placeholder="Price" />
        <input type="submit" name="submit" />
    </form>
</body>
</html>