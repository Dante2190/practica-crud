<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generarPDF($id)
    {

        $proyecto = project::findOrFail($id);

        $pdf = \PDF::loadView('pdf.template', compact('proyecto'));

        return $pdf->download('archivo.pdf');
    }
    public function generarAllPDF()
    {

        $proyectos['proyectos']=Project::paginate(5);

        $pdf = \PDF::loadView('pdf.templateAll',$proyectos);

        return $pdf->download('archivo.pdf');
    }
}
