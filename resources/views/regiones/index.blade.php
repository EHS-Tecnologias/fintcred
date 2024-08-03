<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Regiones | Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Regiones</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('regiones.create') }}">Crear región</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Región</th>
                <th width="280px">Acción</th>
            </tr>
            @foreach ($regiones as $region)
                <tr>
                    <td>{{ $region->id}}</td>
                    <td>{{ $region->nombre}}</td>
                    <td>
                        <form action="{{ route('regiones.destroy',$region->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('regiones.edit',$region->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $regiones->links() !!}
</body>
</html>