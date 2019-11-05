<link rel="stylesheet" href="{{asset("assets/css/custom.css")}}"> 
<script>
        $(function(){
            $("#especie_id").click(function(){
                console.log($(this).val());
                if($(this).val()=='1'){
                    $("#raza_id_perros").removeAttr('disabled');  
                    $("#raza_id_perros").removeAttr('hidden'); 
                    $("#razas_perro").removeAttr('disabled');  
                    $("#razas_perro").removeAttr('hidden');   
                    $("#raza_id_perros").focus();   
                    $("#razas_perro").focus();  
                        
                }else{
                    $("#raza_id_perros").attr('disabled','disabled');  
                    $("#raza_id_perros").attr('hidden','hidden'); 
                    $("#razas_perro").attr('disabled','disabled');  
                    $("#razas_perro").attr('hidden','hidden'); 
                }
            })
        })

        $(function(){
            $(".op1").click(function(){
                if($(this).val()=='2'){
                    $("#raza_id_gatos").removeAttr('hidden'); 
                    $("#raza_id_gatos").removeAttr('disabled'); 
                    $("#razas_gato").removeAttr('disabled');  
                    $("#razas_gato").removeAttr('hidden');   
                    $("#raza_id_gatos").focus();
                    $("#razas_gato").focus(); 
                }else{
                    $("#raza_id_gatos").attr('disabled','disabled');  
                    $("#raza_id_gatos").attr('hidden','hidden'); 
                    $("#razas_gato").attr('disabled','disabled');  
                    $("#razas_gato").attr('hidden','hidden'); 
                }
            })
        })
   
</script>

<div class="form-group row">
    <label for="mascotas_id" class="col-md-4 col-form-label text-md-right">{{ __('Cedula de la Mascota') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('mascotas_id') is-invalid @enderror" name="mascotas_id" value="{{ old('mascotas_id') }}" required autocomplete="mascotas_id" autofocus>
        @error('mascotas_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Mascota') }}</label>
    <div class="col-md-6">
        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
        @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="color_id" class="col-md-4 col-form-label text-md-right">{{ __('color_id') }}</label>
<div class="col-md-6">
    <select id="color_id" name="color_id" class="form-control{{$errors->has('color_id') ? ' is-invalid' : ''}}">
    @foreach($colores->get() as $index => $col)
        <option value="{{ $index}}" {{old('color_id') == $index ? 'selected': ''}}> {{$col}}
        </option>
    @endforeach
    </select>  
     @error('color_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row">
    <label for="especie_id" class="col-md-4 col-form-label text-md-right">{{ __('especie_id') }}</label>
<div class="col-md-6">
    <select id="especie_id" name="especie_id" class="op op1 form-control{{$errors->has('especie_id') ? ' is-invalid' : ''}}">
    @foreach($especies->get() as $index => $esp)
        <option value="{{ $index}}" {{old('especie_id') == $index ? 'selected': ''}}> {{$esp}}
        </option>
    @endforeach
    </select>  
     @error('especie_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row" id="razas_perro" disabled hidden >
    <label for="raza_id_perros" class="col-md-4 col-form-label text-md-right">{{ __('raza_id_perros') }}</label>
<div class="col-md-6">
    <select id="raza_id_perros" name="raza_id_perros" class="form-control{{$errors->has('raza_id_perros') ? ' is-invalid' : ''}}"disabled hidden>
    @foreach($dog->get() as $index => $razdog)
        <option value="{{ $index}}" {{old('raza_id_perros') == $index ? 'selected': ''}}> {{$razdog}}
        </option>
    @endforeach
    </select>  
     @error('raza_id_perros')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row" id="razas_gato" disabled hidden>
    <label for="raza_id_gatos" class="col-md-4 col-form-label text-md-right">{{ __('raza_id_gatos') }}</label>
<div class="col-md-6">
    <select id="raza_id_gatos" name="raza_id_gatos" class="form-control{{$errors->has('raza_id_gatos') ? ' is-invalid' : ''}}"disabled hidden>
    @foreach($cat->get() as $index => $razcat)
        <option value="{{ $index}}" {{old('raza_id_gatos') == $index ? 'selected': ''}}> {{$razcat}}
        </option>
    @endforeach
    </select>  
     @error('raza_id_gatos')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row" id="sexo_id" >
    <label for="sexo_id" class="col-md-4 col-form-label text-md-right">{{ __('sexo_id') }}</label>
<div class="col-md-6">
    <select id="sexo_id" name="sexo_id" class="form-control{{$errors->has('raza_id_gatos') ? ' is-invalid' : ''}}">
    @foreach($sex->get() as $index => $sexpet)
        <option value="{{ $index}}" {{old('sexo_id') == $index ? 'selected': ''}}> {{$sexpet}}
        </option>
    @endforeach
    </select>  
     @error('sexo_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row" id="antirrabica_id" >
    <label for="antirrabica_id" class="col-md-4 col-form-label text-md-right">{{ __('antirrabica_id') }}</label>
<div class="col-md-6">
    <select id="antirrabica_id" name="antirrabica_id" class="form-control{{$errors->has('antirrabica_id') ? ' is-invalid' : ''}}">
    @foreach($rabi->get() as $index => $ca)
        <option value="{{ $index}}" {{old('antirrabica_id') == $index ? 'selected': ''}}> {{$ca}}
        </option>
    @endforeach
    </select>  
     @error('antirrabica_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row" id="temperamento_id" >
    <label for="temperamento_id" class="col-md-4 col-form-label text-md-right">{{ __('temperamento_id') }}</label>
<div class="col-md-6">
    <select id="temperamento_id" name="temperamento_id" class="form-control{{$errors->has('temperamento_id') ? ' is-invalid' : ''}}">
    @foreach($temp->get() as $index => $to)
        <option value="{{ $index}}" {{old('temperamento_id') == $index ? 'selected': ''}}> {{$to}}
        </option>
    @endforeach
    </select>  
     @error('temperamento_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row" id="esteril_id" >
    <label for="esteril_id" class="col-md-4 col-form-label text-md-right">{{ __('esteril_id') }}</label>
<div class="col-md-6">
    <select id="esteril_id" name="esteril_id" class="form-control{{$errors->has('esteril_id') ? ' is-invalid' : ''}}">
    @foreach($esteril->get() as $index => $ril)
        <option value="{{ $index}}" {{old('esteril_id') == $index ? 'selected': ''}}> {{$ril}}
        </option>
    @endforeach
    </select>  
     @error('esteril_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror      
</div>
</div>

<div class="form-group row" id="estado_id" >
    <label for="estadoss_id" class="col-md-4 col-form-label text-md-right">{{ __('estado_id') }}</label>
<div class="col-md-6">
    <select id="estado_id" name="estado_id" class="form-control{{$errors->has('estadoss_id') ? ' is-invalid' : ''}}">
    @foreach($estado->get() as $index => $esta)
        <option value="{{ $index}}" {{old('estado_id') == $index ? 'selected': ''}}> {{$esta}}
        </option>
    @endforeach
    </select>  
     @error('estado_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror   
    </div> 
</div>


{{-- verificar si funcion --}}
<div class="form-group row" >
    <label for="{{ auth()->user()->cedula }}" class="col-md-4 col-form-label text-md-right">{{ __('dueño') }}</label>
    <div class="col-md-6">
        <input id="{{ auth()->user()->cedula }}" type="text" class="form-control @error('{{ auth()->user()->cedula }}') is-invalid @enderror" name="{{ auth()->user()->cedula }}" value="{{ auth()->user()->cedula }}" required autocomplete="{{ auth()->user()->cedula }}" autofocus disabled>
        @error('{{ auth()->user()->cedula }}')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
<label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('foto') }}</label>
<div class="col-md-6">
    <input type="file" name="foto" id="foto" value="">
</div>
</div>
