<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Crear Empresas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h2 class="mt-3">Nueva Empresa</h2>
            <form action="{{route('companies.store')}}" class="mt-2" method="post">
                @csrf
                <label for="name" class="form-label"><b>Nombre</b></label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="nit" class="form-label"><b>NIT</b></label>
                <input type="text" name="nit" id="nit" class="form-control">
                <div class="container col-11">
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-md col-10">Crear</button>
                        <input type="reset" value="Limpiar" class="bnt btn-md btn-outline-secondary col-5">
                        <a href="{{route('companies.index')}}" class="btn btn-link btn-md col-5">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6">
            <form action="{{route('companies.import.excel')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="importFile" class="form-label">Archivo de excel</label>
                    <input class="form-control" type="file" id="importFile" name="importFile">
                </div>
                <table class="table caption-top">
                    <caption>Ejemplo de formato</caption>
                    <thead>
                    <tr>
                        <td><b>Nombre</b></td>
                        <td><b>NIT</b></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>nombre</td>
                        <td>123-456</td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html>
