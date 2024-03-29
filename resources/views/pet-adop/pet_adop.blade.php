@extends("layouts.app")
@section("titulo")
Mascotas en adopcion
@endsection
@section('content')


<h1>Mascotas disponibles para Adoptar</h1>
<table class="table table-light">
        @include('includes.regreso-menu')
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>foto</th>
                <th>nombre</th>
                <th>estado_id</th>
                <th>users_cc</th>
            </tr>
        </thead>
        <tbody>
                
            @foreach ($mascotas as $mascota)  
            <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="{{asset('storage').'/'.$mascota->foto}}" alt="" width="200"></td>
            <td>{{$mascota->nombre}}</td>
            <td>{{$mascota->estado_id}}</td>
            
            <td><a href="{{route('mostrar_perf')}}">{{$mascota->users_cc}}</a></td><!-- enlazar al info del user pero con el valor que muestra users_cc  -->
            </tr>
            @endforeach
        </tbody>
    </table>  
    {{$mascotas->links()}}
    <div class="row">
        <div class="col-lg-12">
            <h1>Poner en adopcion</h1>
        </div>
        <div class="box-body">
            <label for="">tus mascotas</label>
            <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>foto</th>
                            <th>nombre</th>
                            <th>estado_id</th>
                            <th>Pone en adopcion</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mascotas as $mascota)      
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><img src="{{asset('storage').'/'.$mascota->foto}}" alt="" width="200"></td>
                        <td>{{$mascota->nombre}}</td>
                        <td>{{$mascota->estado_id}}</td>
                        <td><select> aqui para editar  el estado </select></td>      
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$mascotas->links()}}
        </div>
   </div>
     @endsection