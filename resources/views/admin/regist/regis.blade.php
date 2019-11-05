
@extends("layouts.app")

@section('titulo')
   Modulo de Registros
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12">
            @include('includes.regreso-menu-admin')
        <div class="box box-danger">
            
            <div class="box-header with-border">
                <h3 class="box-title">Sistema crud de registrar y editar usuarios, mascotas ) </h3>                      
                <div class="card" style="width: 19rem;margin-right: 3%">
                        <h1>insertar aqui los form </h1>
                </div>
            </div>
            <div class="card" style="width: 19rem;margin-right: 3%">
                <h1>aqui consulta mascotas</h1>
            </div>
            <div class="card" style="width: 19rem;margin-right: 3%">
                    <h1>aqui consulta usuarios</h1>
            </div>
        </div>
    </div>
</div> 
@endsection