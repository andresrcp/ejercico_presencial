<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <td><b>ID</b></td>
                <td><b>Nombre</b></td>
                <td><b>Descripción</b></td>
                <td><b>Precio</b></td>
                <td><b>Imagen</b></td>
                <td><b>Empresa</b></td>
                <td><b>Fecha de creación</b></td>
                <td><b>Fecha de modificación</b></td>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>${{$product->price}}</td>
                <td>{{$product->image}}</td>
                <td>{{$product->company->name}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
