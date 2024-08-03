<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Añadir Regiones - Fintcred</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Añadir Región</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('regiones.index') }}">Regresar</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('regiones.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Región:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre de la región">
                        @error('nombre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Crear</button>
            </div>
        </form>
</body>
</html>