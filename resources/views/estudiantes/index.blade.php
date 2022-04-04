<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Registro de estudiantes</title>
</head>
<br>
<br>
<body>
<center><h2 style="color:Red">Datos del Estudiantes</h2></center>
<br>

<div class="card">

<div class="card-header">
<div class="card-body">

<table class="table table-borderless">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
             
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($estudiantes as $estudiante)
        <td>{{$estudiante->id}}</td>
        <td>{{$estudiante->codigo}}</td>
        <td>{{$estudiante->nombre}}</td>
        <td>{{$estudiante->apellido}}</td>
        <td>{{$estudiante->direccion}}</td>
        <td>{{$estudiante->telefono}}</td>
        <td>{{$estudiante->email}}</td>
        <td>
        <a class="btn btn-primary " href="{{url('/estudiante/'.$estudiante->id.'/edit')}}"><i class="fa fa-fw fa-eye"></i> Editar</a> 
        </td>
        <td>
            <form action="{{url('/estudiante/'.$estudiante->id) }}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-danger" value="Eliminar"
                onclick="return confirm('Estas seguro que quieres eliminar este registro')"
                >
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
 


    <center><br><a class="btn btn-primary " href="{{url('/estudiante/create')}}"><i class="fa fa-fw fa-eye"></i>Crear nuevo registros</a></center>
</body>
</html>
