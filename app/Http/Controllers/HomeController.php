<?php


namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener la lista de alumnos paginada
        $alumnos = Alumno::paginate(100);
        // Pasar la lista de alumnos a la vista home
        return view('alumnos.index', compact('alumnos'));
    }
}
