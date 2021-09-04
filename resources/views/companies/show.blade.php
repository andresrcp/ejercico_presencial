<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Detalles</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table-striped mt-2 caption-top">
                    <caption><b>Empresa</b></caption>
                    <thead>
                    <tr>
                        <td><b>Nombre</b></td>
                        <td><b>NIT</b></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$company->name}}</td>
                        <td>{{$company->nit}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a href="{{route('companies.index')}}" class="btn btn-md btn-primary">Regresar</a>
        </div>
    </div>
</div>
</body>
</html>
