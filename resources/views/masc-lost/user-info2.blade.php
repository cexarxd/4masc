@extends("layouts.app")
@section("titulo")
pet encontrada
@endsection

@section('content')

<div class="row">
        <div class="col-lg-12">
                <div class="box-tools pull-right">
                 <a href="{{route('mostrar_encon')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver a mascotas encontradas
                 </a>
                </div>
<h1>Mascota encontrada</h1>
        <div class="col-lg-12">
                <div class="box-body">
codigo que busca en la bd la info del usuario y la mascota encontrada
<h1>aqui la ubicacion</h1>
                </div>
        </div>
        </div>
</div>
@endsection