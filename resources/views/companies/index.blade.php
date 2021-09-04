<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Empresas</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{route('companies.create')}}" class="btn btn-md btn-primary">Crear Empresa</a>
            <a href="{{route('products.index')}}" class="btn btn-md btn-secondary">Listado productos</a>
            <div class="table-responsive">
                <table class="table table-hover mt-4">
                    <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Empresa</b></td>
                        <td><b>NIT</b></td>
                        <td><b>Opciones</b></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->nit}}</td>
                            <td>
                                <form action="{{route('companies.destroy', $company->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <a href="{{route('companies.show', $company->id)}}" class="btn bnt-sm btn-info col-10">Detalles</a>
                                        <a href="{{route('companies.edit', $company->id)}}" class="btn bnt-sm btn-warning col-10">Editar</a>
                                        <button type="submit" class="bnt btn-sm btn-danger col-10">Eliminar</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="position-relative col-md-12">
            <nav aria-label="pagination">
                {{$companies->links()}}
            </nav>
        </div>
    </div>
</div>
</body>
</html>
