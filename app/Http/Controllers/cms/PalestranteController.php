<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Palestrante;

class PalestranteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $palestrante;

    public function __construct(Palestrante $palestrante)
    {   
        $this->middleware('auth');
        $this->palestrante = $palestrante;
    }

    public function index()
    {   

        $palestrantes  = $this->palestrante->get();

        return view('cms.pages.palestrante.list', compact('palestrantes'));
    }
    
    public function create()
    {
        $palestrante = $this->palestrante;
        return redirect('/admin/palestrante/editar/' . $palestrante->id);
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $palestrante = $this->palestrante->where('id', $input['id'])->first();
        $palestrante->fill($input);

        if ($palestrante->save()) {
            return redirect('admin/palestrante');
        } else {
            return view('cms.pages.palestrante.form', compact($palestrante, $errors));    
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $palestrante = $this->palestrante->where('id', $input['id'])->first();
        
        return view('cms.pages.palestrante.form', compact($palestrante));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->palestrante->where('id', $input['id'])->delete();

        return response()->json([]);
    }
}
