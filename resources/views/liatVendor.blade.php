<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ol>
        @foreach ($list_produk as $prod)
            <li>{{$prod->name}}</li>
        @endforeach
    </ol>
    
</body>
</html>