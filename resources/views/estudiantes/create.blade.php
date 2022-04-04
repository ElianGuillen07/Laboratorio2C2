<center>
    <br>
    <br>
<h2 style="color:Red">Nuevo datos de Estudiante</h2>
</center>
<br>
<br>
<form action="{{ url('estudiante') }}" method="post">
    @csrf   
    @include ('estudiantes.form')
</form>