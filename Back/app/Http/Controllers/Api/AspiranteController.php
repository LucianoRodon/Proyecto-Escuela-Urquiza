<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aspirante; 
use Illuminate\Http\Request;
use App\Http\Requests\Aspirante\AspiranteValidation;

class AspiranteController extends Controller
{
   
    public function mostrarAspirantes()
    {
        $aspirantes = Aspirante::all();
        return response()->json($aspirantes);
    }

   
    public function mostrarAspiranteIndividual($id)
    {
        $aspirante = Aspirante::find($id);

        if ($aspirante) {
            return response()->json($aspirante);
        } else {
            return response()->json(['message' => 'Aspirante no encontrado'], 404);
        }
    }



    public function altaAspirante(AspiranteValidation $request)
{
    

    try {
       
        $validated = $request->validated();

        // $data = $request->validated();
       $aspirante = Aspirante::create([
            'id_aspirante'=> $validated['id_aspirante'],
            'DNI' => $validated['DNI'],
            'nombre' => $validated['nombre'],
            'apellido' => $validated['apellido'],
            'email' => $validated['email'],
            'telefono' => $validated['telefono'],
            'genero' => $validated['genero'],
            'fecha_nac'=> $validated['fecha_nac'],
            'nacionalidad' => $validated['nacionalidad'],
            'direccion' => $validated['direccion'],
            'id_localidad' => $validated['id_localidad']


        ]);

        return response()->json(['message' => 'Aspirante creado con éxito' . $aspirante], 201);
    } catch (\Exception $e) {
        // Capturar cualquier error y devolver un mensaje de error
        return response()->json(['error' => 'Error al crear el aspirante: ' . $e->getMessage()], 500);
    }
}

    
    public function modificarAspirante(Request $request, $id)
    {
        $aspirante = Aspirante::find($id);

        if ($aspirante) {
            $aspirante->DNI = $request->DNI ?? $aspirante->DNI;
            $aspirante->nombre = $request->nombre ?? $aspirante->nombre;
            $aspirante->apellido = $request->apellido ?? $aspirante->apellido;
            $aspirante->email = $request->email ?? $aspirante->email;
            $aspirante->telefono = $request->telefono ?? $aspirante->telefono;
            $aspirante->genero = $request->genero ?? $aspirante->genero;
            $aspirante->fecha_nac = $request->fecha_nac ?? $aspirante->fecha_nac;
            $aspirante->nacionalidad = $request->nacionalidad ?? $aspirante->nacionalidad;
            $aspirante->direccion = $request->direccion ?? $aspirante->direccion;
            $aspirante->id_localidad = $request->id_localidad ?? $aspirante->id_localidad;

            $aspirante->save();

            return response()->json(['message' => 'Aspirante actualizado con éxito']);
        } else {
            return response()->json(['message' => 'Aspirante no encontrado'], 404);
        }
    }

    public function bajaAspirante($id)
    {
        $aspirante = Aspirante::find($id);

        if ($aspirante) {
            $aspirante->delete();
            return response()->json(['message' => 'Aspirante eliminado con éxito']);
        } else {
            return response()->json(['message' => 'Aspirante no encontrado'], 404);
        }
    }
}
