<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Crear Productos</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h2 class="mt-3">Nuevo Producto</h2>
            <form action="{{route('products.store')}}" class="mt-2" method="post">
                @csrf
                <label for="name" class="form-label"><b>Nombre</b></label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="description" class="form-label"><b>Descripción</b></label>
                <input type="text" name="description" id="description" class="form-control">
                <label for="price" class="form-label"><b>Precio</b></label>
                <input type="number" name="price" id="price" class="form-control" step="0.01">
                <label for="image" class="form-label"><b>URL Imagen</b></label>
                <input type="text" name="image" id="image" class="form-control" placeholder="www.google.com."
                       aria-describedby="imagelHelp">
                <div id="imagelHelp" class="form-text">Pega el enlace o dirección (URL) de tu imagen.</div><br>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="companies_id">Empresa</label>
                    <select class="form-select" id="companies_id" name="companies_id">
                        <option selected>Choose...</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="container col-11">
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-md col-10">Crear</button>
                        <input type="reset" value="Limpiar" class="bnt btn-md btn-outline-secondary col-5">
                        <a href="{{route('products.index')}}" class="btn btn-link btn-md col-5">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
