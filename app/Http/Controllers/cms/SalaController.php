<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Sala;

class SalaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $sala;

    public function __construct(Sala $sala)
    {   
        $this->middleware('auth');
        $this->sala = $sala;
    }

    public function index()
    {   

        $salas  = $this->sala->get();

        return view('cms.pages.sala.list', compact('salas'));
    }
    
    public function create()
    {
        $sala = $this->sala;
        return redirect('/admin/sala/editar/' . $sala->id);
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $sala = $this->sala->where('id', $input['id'])->first();
        $sala->fill($input);

        if ($sala->save()) {
            return redirect('admin/sala');
        } else {
            return view('cms.pages.sala.form', compact($sala, $errors));    
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $sala = $this->sala->where('id', $input['id'])->first();
        
        return view('cms.pages.sala.form', compact($sala));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->sala->where('id', $input['id'])->delete();

        return response()->json([]);
    }
}
