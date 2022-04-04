@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro Para estudiantes') }}</div>
                <center> <img src="https://i.pinimg.com/736x/ee/56/03/ee5603332e58b2ed7f10674d23287842.jpg" class="card-img-top" width="400"
     height="500"> </center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Contenido') }}
                    Esta Aplicacion se basa en un registro a Estudiantes donde se tomaran sus datos como codigo, nombre, apellido, direccion, telefono, email.
                    <br>
                    <center><h2><a class="btn btn-primary " href="{{ url('/estudiante/') }}"><i class="fa fa-fw fa-eye"></i> Crear registro</a></h2></center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
