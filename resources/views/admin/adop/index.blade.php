@extends("layouts.app")
@section('titulo')
Adopcion-admin
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        @include('includes.regreso-menu-admin')
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Modulo de control de mascotas en Adopcion</h3>
                
            </div>
            <div class="box-body">
                <h4>aqui debe haber un buscador por cedula o nombre para encontrar la mascota a modificar</h4>
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            
                            <th class="width70">editar estado</th>
                            {{-- aqui se cambia el esta de normal a en adopcion de cualquier mascota--}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nombre}}</td>
                            <td>
                                <a href="{{route('editar_adop', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
 
            </div>
        </div>
    </div>
</div>
@endsection