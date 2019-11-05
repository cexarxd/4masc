@extends("layouts.app")
@section("titulo")
Informacion de Contacto del Usuario
@endsection

@section('content')

<div class="row">
        <div class="col-lg-12">
                <div class="box-tools pull-right">
                 <a href="{{route('mostrar_lost')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver a mascotas perdidas
                 </a>
                </div>
<h1>Ciudadano que perdio la mascota</h1>
        <div class="col-lg-12">
                <div class="box-body">
codigo que busca en la bd la info del usuario que selecciono y la mascota
                </div>
        </div>
        </div>
</div>
@endsection