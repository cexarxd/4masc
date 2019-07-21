seccion para registro de mascotas
<br>
<!--{url('regis-masc')} la url de la carpeta-->
<form action="{{ url('regis-masc')}}" class="post" enctype="multipart/form-data">
<!--llave de acceso-->
    {{ csrf_field() }}
<label for="mascotas_id">{{'mascotas_id'}}</label>
<input class="text" name="mascotas_id" id="mascotas_id" value="">

<input type="submit" value="guardar">
</form>
