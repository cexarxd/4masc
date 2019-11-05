<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionRol;
use App\Mascota;
class Adop_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Mascota::orderBy('id')->get();
        /** aqui que permita buscar con cedula del dueño o nombre las mascotas que esten en estado (disponible para adoptar)*/
    /** aqui que permita buscar con cedula del dueño o nombre las mascotas que esten en estado (normal)*/
        return view('admin.adop.index', compact('datas'));
    }
    public function editar($id)
    {
        $data = Mascota::findOrFail($id);
        return view('admin.adop.editar', compact('data'));
    }
    
    public function actualizar(ValidacionRol $request, $id)
    {
        Mascota::findOrFail($id)->update($request->all());
        return redirect('admin.adop.index')->with('mensaje', 'estado actualizado con exito');
    }
   
}