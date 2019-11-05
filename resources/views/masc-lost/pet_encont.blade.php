@extends("layouts.app")
@section("titulo")
Mascotas Encontradas
@endsection

@section('content')

<h1>mascotas encontradas</h1>
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
            <td><a href="{{route('mostrar_user_encon')}}">{{$mascota->users_cc}}</a></td><!-- enlazar al info del user pero con el valor que muestra users_cc  -->
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$mascotas->links()}}
   
   @endsection