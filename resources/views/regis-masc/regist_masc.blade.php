@extends("layouts.app")

@section('titulo')
    Registro Mascotas
@endsection


@section('content')
@inject('colores', 'App\Services\Colores')
@inject('especies', 'App\Services\Especies')
@inject('dog', 'App\Services\Razas_perros')
@inject('cat', 'App\Services\Razas_gatos')
@inject('sex', 'App\Services\Sexos')
@inject('rabi', 'App\Services\Antirrabicas')
@inject('temp', 'App\Services\Temperamentos')
@inject('esteril', 'App\Services\Esteriles')
@inject('estado', 'App\Services\Estados')
@inject('user', 'App\Services\Users')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="row">
    <div class="col-lg-12">
       
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Registro de Mascotas</h3>
                @include('includes.regreso-menu')
                @include('includes.mensaje')
                @include('includes.form-error')
                <form method="POST" action="{{ route('registro') }}" id="form-general" enctype="multipart/form-data" >
                        @csrf
                        <div class="card-body">
                        @include('regis-masc.form')<!-- enlace con el blde form -->
                        @include('regis-masc.botom-eviar')
                        </div>
      
                </form>

            </div>
   
        </div>
    </div>
</div> 
@endsection