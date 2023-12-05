<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $file = $request->file('avatar');

        $fileName = time() . '.' . $file->getClientOriginalExtension();

        $file->storeAs('public/images', $fileName);

        $empData = ['nombre_cursos' => $request->nombre_cursos, 'avatar' => $fileName];
        Curso::create($empData);
        return response()->json([

            'status' => 200,
        ]);
    }


    // handle edit an employee ajax request
    public function edit(Request $request)
    {
        $id = $request->id;
        $emp = Curso::find($id);
        return response()->json($emp);
    }

    // handle update an Curso ajax request
    public function update(Request $request)
    {

        $emp = Curso::find($request->emp_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->$request->avatar) {
                Storage::delete('public/images/' . $emp->avatar);
            }
        } else {
            $fileName = $request->emp_avatar;
        }

        $empData = ['nombre_cursos' => $request->nombre_cursos, 'avatar' => $fileName];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an Curso ajax request
    public function delete(Request $request)
    {
        $id = $request->id;
        $emp = Curso::find($id);
        if (Storage::delete('public/images/' . $emp->avatar)) {
            Curso::destroy($id);
        }
    }
}
