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
        <td><b>NIT</b></td>
        <td><b>Fecha Creación</b></td>
        <td><b>Fecha Modificación</b></td>
    </tr>
    </thead>
    @foreach($companies as $company)
        <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->name}}</td>
            <td>{{$company->nit}}</td>
            <td>{{$company->created_at}}</td>
            <td>{{$company->updated_at}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
