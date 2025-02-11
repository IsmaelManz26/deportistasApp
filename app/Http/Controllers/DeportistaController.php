<?php

namespace App\Http\Controllers;

use App\Models\Deportista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DeportistaController extends Controller
{

    function main()
    {
        return view('main');
    }

    public function index(Request $request)
    {
        return response()->json([
            'deportistas' => Deportista::orderBy('id')->paginate(10),
            'user' => Auth::user()
        ]);
    }

    public function index1()
    {
        return response()->json([
            'deportistas' => Deportista::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $deportistas = [];
        $validator = Validator::make($request->all(), [
            'name'   => 'required|unique:deportista|max:100|min:2',
            'deporte' => 'required|string|max:50',
            'edad'   => 'required|integer|gte:0|lte:100',
            'altura' => 'required|numeric|gte:0|lte:3',
            'peso'   => 'required|numeric|gte:0|lte:300',
        ]);
        if ($validator->passes()) {
            $message = '';
            $result = Deportista::change($request);
            if ($result) {
                $deportistas = Deportista::orderBy('name')->paginate(10)->setPath(url('deportista'));
            } else {
                $message = 'Message deportista has not been saved.';
            }
        } else {
            $result = false;
            $message = $validator->getMessageBag();
        }
        return response()->json(['result' => $result, 'message' => $message, 'deportistas' => $deportistas]);
    }

    public function show($id)
    {
        $deportista = Deportista::find($id);
        $message = '';
        if ($deportista === null) {
            $message = 'Deportista not found.';
        }
        return response()->json([
            'message' => $message,
            'deportista' => $deportista
        ]);
    }

    public function showSingle($id)
    {
        $deportista = Deportista::find($id);
        if ($deportista === null) {
            return redirect('/')->with('error', 'Deportista not found.');
        }
        return view('deportista-single', ['deportista' => $deportista]);
    }

    public function update(Request $request, $id)
    {
        $message = '';
        $deportista = Deportista::find($id);
        $deportistas = [];
        $result = false;

        if ($deportista != null) {
            // Validación con exclusión de 'name' si es el mismo deportista
            $validator = Validator::make($request->all(), [
                'name'   => 'required|max:100|min:2|unique:deportista,name,' . $id,  // Excluye al deportista con ese id
                'deporte' => 'required|string|max:50',
                'edad'   => 'required|integer|gte:0|lte:100',
                'altura' => 'required|numeric|gte:0|lte:3',
                'peso'   => 'required|numeric|gte:0|lte:300',
            ]);

            if ($validator->passes()) {
                $result = $deportista->modify($request);  // Llama al método modify con los datos del request
                if ($result) {
                    // Devuelve la lista actualizada de deportistas
                    $deportistas = Deportista::orderBy('name')->paginate(10)->setPath(url('deportista'));
                } else {
                    $message = 'Deportista has not been updated.';
                }
            } else {
                // Si la validación falla, devuelve los mensajes de error
                $message = $validator->getMessageBag();
            }
        } else {
            $message = 'Deportista not found';
        }

        return response()->json([
            'result' => $result,
            'message' => $message,
            'deportistas' => $deportistas
        ]);
    }


    public function destroy(Request $request, $id)
    {
        $message = '';
        $deportistas = [];
        $result = false;
        $deportista = Deportista::find($id);

        if ($deportista) {
            try {
                // Eliminar deportista
                $result = $deportista->delete();

                if ($result) {
                    // Obtener lista de deportistas actualizada
                    $deportistas = Deportista::orderBy('name')->paginate(10)->setPath(url('deportista'));
                } else {
                    $message = 'Deportista could not be deleted.';
                }
            } catch (\Exception $e) {
                $message = 'An error occurred: ' . $e->getMessage();
            }
        } else {
            $message = 'Deportista not found';
        }

        return response()->json([
            'result' => $result,
            'message' => $message,
            'deportistas' => $deportistas
        ]);
    }
}
