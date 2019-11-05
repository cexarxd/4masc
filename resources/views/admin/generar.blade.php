
@extends("layouts.app")

@section('titulo')
   Modulo de Generar
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12">
            @include('includes.regreso-menu-admin')
        <div class="box box-danger">
            
            <div class="box-header with-border">
                <h3 class="box-title">Sistema para generar datos ) </h3>                      
                <div class="card" style="width: 76rem;margin-right: 3%">
                        <h1>insertar menu para seleccionar datos (filtro)(por nombre, por tipo, por genero, por raza, vacunas,por temperamento, por sexo, todo, solo mascotas, solo usuarios, solo admins, por estados, mascota+dueños, por oren de id, por orden tiempo, por orden tipo)</h1>
                </div>
            </div>
            <div class="card" style="width: 19rem;margin-right: 3%">
                <h1>genera consulta</h1>
            </div>
            <div class="card" style="width: 19rem;margin-right: 3%">
                    <h1>aqui para imprimir o exportar</h1>
            </div>
        </div>
    </div>
</div> 
@endsection