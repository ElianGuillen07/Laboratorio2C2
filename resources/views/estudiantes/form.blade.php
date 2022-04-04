<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <title> Validaciones </title>
  
</head>
<center>
<body>
  <form class="row g-3" >
  <div class="col-md-4 position-relative" >
    
 
<label for="validationTooltip01"   class="fw-bold" >Codigo:</label>
<input type="text"  name="codigo" class="form-control text-dark bg-striped" id="validationTooltip01" value="{{isset($estudiante->codigo)?$estudiante->codigo:''}}" required>
<br>
<label for="validationTooltip02"  class="fw-bold">Nombre:</label>
<input type="text" name="nombre"class="form-control text-dark bg-striped" id="validationTooltip02"value="{{isset($estudiante->nombre)?$estudiante->nombre:''}}"required>
<br>
<label for="validationServer03" class="fw-bold">Apellido:</label>
<input type="text" name="apellido" class="form-control text-dark bg-striped"  id="validationServer03"value="{{isset($estudiante->apellido)?$estudiante->apellido:''}}" required>
<br>
<label for="validationServer04" class="fw-bold">Direccion:</label>
<input type="text" name="direccion" class="form-control text-dark bg-striped"  id="validationServer04"value="{{isset($estudiante->direccion)?$estudiante->direccion:''}}"required>
<br>
<label for="validationServer04" class="fw-bold">Telefono: 503(Telefono)</label>
<input type="text" pattern="^503\d{8}$" name="telefono" class="form-control text-dark bg-striped" id="validationServer05"value="{{isset($estudiante->telefono)?$estudiante->telefono:''}}"required>
<br>
<label for="validationServer06"  class="fw-bold">Email:</label>
<input type="text" name="email" class="form-control text-dark bg-striped" id="validationServer06"value="{{isset($estudiante->email)?$estudiante->email:''}}"required>
 <br>
</div>
<br>
<br><button type="submit"  class="btn btn-primary">Guardar</button>     <a class="btn btn-primary " href="{{url('/estudiante/')}}"><i class="fa fa-fw fa-eye"></i>Regresar</a>

</form>

</body>
</center>
</html>
