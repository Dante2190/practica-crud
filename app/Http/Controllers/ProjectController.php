<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $proyectos['proyectos'] = Project::paginate(5);
        return view('proyectos.index', $proyectos);
    }
    public function create()
    {
        return view('proyectos.create');
    }
    public function store(Request $request)
    {
        $datosProyecto = request()->except('_token');
        Project::insert($datosProyecto);
        return redirect('proyecto')->with('mensaje', 'Nuevo Proyecto Agregado Exitosamente');
    }
    public function edit($id)
    {
        $proyecto = Project::findOrFail($id);
        return view('proyectos.edit', compact('proyecto'));
    }
    public function update(Request $request, $id)
    {
        $datosProjecto = request()->except('_token', '_method');
        Project::where('id', '=', $id)->update($datosProjecto);

        return redirect('proyecto')->with('mensaje', 'Proyecto Modificado Exitosamente');
    }
    public function destroy($id)
    {
        $proyecto = project::findOrFail($id);
        $proyecto->delete();
        return redirect('proyecto')->with('mensaje', 'proyecto eliminado correctamente');
    }
}
