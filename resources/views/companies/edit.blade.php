<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Editar Empresas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h2 class="mt-3">Nuevo Producto</h2>
            <form action="{{route('companies.update', $company->id)}}" class="mt-2" method="post">
                @csrf
                @method('PUT')
                <label for="name" class="form-label"><b>Nombre</b></label>
                <input type="text" name="name" id="name" class="form-control" value="{{$company->name}}">
                <label for="nit" class="form-label"><b>NIT</b></label>
                <input type="text" name="nit" id="nit" class="form-control" value="{{$company->nit}}">
                <div class="container col-11">
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-md col-10">Actualizar</button>
                        <input type="reset" value="Limpiar" class="bnt btn-md btn-outline-secondary col-5">
                        <a href="{{route('companies.index')}}" class="btn btn-link btn-md col-5">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
