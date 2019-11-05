@extends("layouts.app")
@section('titulo')
Roles
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
                <h3 class="box-title">Modulo para crear y relacionar Roles</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_rol')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nombre}}</td>
                            <td>
                                <a href="{{route('editar_rol', ['id' => $data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <form action="{{route('eliminar_rol', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="card body">
                <h2>aqui un control que permita al admin convertir usuarios en admins y alreves</h2>
                <h3>y hacer que los que se registren queden por defecto como usuario</h3>
                </div>
                <div class="card body">
                        <h2>boton que lleva a la admin de permisos para los menus (home)</h2>
                        <div class="box-tools pull-right">
                                <a href="{{route('menu_rol')}}" class="btn btn-block btn-info btn-sm">
                                    <i class="fa fa-fw fa-reply-all"></i> Admin de Menus Home
                                </a>
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection