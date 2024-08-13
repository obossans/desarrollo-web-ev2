<?php

namespace App\Http\Controllers;

use App\Models\ModelsPost;
use App\Models\proyectoModel;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function create()
    {
    return view('proyectos/ViewCreate');
}

    public function store(Request $request)
    {
         $post = new proyectoModel();

         $post->nombre = $request->nombre;
         $post->fechainicio = $request->fechainicio;
         $post->estado = $request->estado;
         $post->responsable = $request->responsable;
         $post->monto = $request->monto;

         $post->save();

         return redirect('/posts');

}

public function destroy($id)
    {
        $proyecto = proyectoModel::find($id);
        $proyecto->delete();

        return redirect('/posts');

    }

    public function edit($id)
    {
        $proyecto = proyectoModel::find($id);
        return view('proyectos/ViewModificar', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $proyecto = proyectoModel::find($id);

        $proyecto->nombre = $request->nombre;
        $proyecto->fechainicio = $request->fechainicio;
        $proyecto->estado = $request->estado;
        $proyecto->responsable = $request->responsable;
        $proyecto->monto = $request->monto;

        $proyecto->save();

        return redirect("/posts/{$proyecto->id}");
    }

    public function index()
    {
        $proyectos = proyectoModel::all();
        return view('proyectos/ViewTodo', compact('proyectos'));
    }

    // Método para obtener un proyecto por ID
    public function show($id)
    {
        // Buscar el proyecto por ID
        $proyecto = proyectoModel::find($id);

        // Retornar la vista con el proyecto o null
        return view('proyectos/ViewUno', compact('proyecto'));
    }

    public function showUf()
    {
        $hoy = date("d-m-Y");
        $api = "https://mindicador.cl/api/uf/$hoy";
        
        if (ini_get('allow_url_fopen')) {
            $json = file_get_contents($api);
        } else {
            $curl = curl_init($api);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($curl);
            curl_close($curl);
        }
        
        $data = json_decode($json, true);  
        $ufValue = $data['serie'][0]['valor'] ?? null;  
        
        return view('proyectos/ufView', compact('ufValue'));
        //return view('ufView', ['ufValue' => $ufValue]);
    }
}