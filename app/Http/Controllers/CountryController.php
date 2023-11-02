<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

// 1. index() = muestra todos los paises
// 2. store() = guarda un pais
// 3. update() = actualizar un pais
// 4. destroy() = eliminar pais
// 5. edit() = mostrar el formulario de edicion de paises

class CountryController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "codigo_pais"=>'required|string|min:2|max:10|unique:paises,codigo_pais',
            'nombre'=> 'required|string|min:4|max:50'
        ]);

        Country::create([
            'codigo_pais' => $request->codigo_pais,
            'nombre' => $request->nombre
        ]);
        return redirect()->back()
        ->with('success','Pais creado correctamente');
    }

    public function create(){
        return view('country.create');
    }

    public function index(Request $request){
        $countries = Country::get();
        return view('country.index', ['countries' => $countries]);
    }

    public function destroy($id){
        $country = Country::find($id);
        if ($country) {
            $country->delete();
            return redirect()->route('country.index')
            ->with('success', 'País eliminado exitosamente.');
        } else {
            return redirect()->route('country.index')
            ->with('error', 'No se encontró el país.');
        }
    }
}
