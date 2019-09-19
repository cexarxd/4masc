@extends("layouts.app")
@section('titulo')
    Sistema Menús
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card">
                <h3 class="row justify-content-center">Crear Menús</h3>
                <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf<!-- seguridad del form -->
                    <div class="card-body">
                   @include('admin.menu.form')<!-- enlace con el blde form -->
                    </div>
                        <div class="card-body">
                        @include('includes.boton-form-crear')<!-- enlace con el boton -->
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

