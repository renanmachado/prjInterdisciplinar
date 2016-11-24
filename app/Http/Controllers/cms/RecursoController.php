<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Recurso;

class RecursoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $recurso;

    public function __construct(Recurso $recurso)
    {   
        $this->middleware('auth');
        $this->recurso = $recurso;
    }

    public function index()
    {   

        $recursos  = $this->recurso->get();

        return view('cms.pages.recurso.list', compact('recursos'));
    }
    
    public function create()
    {
        $recurso = $this->recurso;
        return view('cms.pages.recurso.form', compact('recurso'));
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $recurso = $this->recurso->firstOrNew(['Id_Recurso' => $input['Id_Recurso']]);
        $recurso->fill($input);

        if ($recurso->save()) {
            return redirect('admin/recurso');
        } else {
            return view('cms.pages.recurso.form', compact('recurso', 'errors'));    
        }
    }

    public function edit($id = null)
    {
        $input   = Request::all();
        $recurso = $this->recurso->where('Id_Recurso', $id)->first();
        
        return view('cms.pages.recurso.form', compact('recurso'));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->recurso->where('Id_Recurso', $input['id'])->delete();

       return response()->json(['success' => true], 200, []);
    }
}
