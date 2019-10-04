<?php
namespace App\Http\Controllers\Registro;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionMenu;
use App\Mascota;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Mascota::orderBy('id')->get();
        return view('regis-masc.regist_masc', compact('datos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'mascotas_id' => ['required', 'integer', 'max:255'],
            'nombre' => ['required', 'string', 'max:255'],
            'color_id' => ['required', 'string','max:255' ],
            'especie_id' => ['required', 'string','max:255' ],
            'raza_id_perros' => ['required', 'string','max:255' ],
            'raza_id_gatos' => ['required', 'string','max:255' ],
            'sexo_id' => ['required', 'string','max:255' ],
            'antirrabica_id' => ['required', 'string','max:255' ],
            'temperamento_id' => ['required', 'string','max:255' ],
            'adopcion_id' => ['required', 'string','max:255' ],
            'estado_id' => ['required', 'string','max:255' ],
            'users_cc' => ['required', 'string','max:255' ],  
            'foto' => ['required', 'string','max:255' ],  
        ]);                                          
    }
   
        public function store(Request $request)
        {
            $datosmascota=request()->except('_token');
            if($request->hasFile('foto')){
                $datosmascota['foto']=$request->file('foto')->store('uploads','public');
            }
            Mascota::insert($datosmascota);
            return redirect('registrar')->with('mensaje', 'Mascota guardada con exito. SI DESA REGISTRAR OTRA CONTINUE O DE EN VOLVER AL LISTADO');
            response()->json($datosmascota);
            }
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionMenu $request)
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        
       
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionMenu $request, $id)
    {
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
       
        
    }
}