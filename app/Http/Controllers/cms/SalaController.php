<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
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
        $sala    = $this->sala;
        $options = ['SIM' => 'Sim', 'NAO' => 'Não' ];
        
        return view('cms.pages.sala.form', compact('sala', 'options'));
    }

    public function save()
    {
        $errors  = [];
        $input   = Request::all();
        $options = ['SIM' => 'Sim', 'NAO' => 'Não' ];
        
        $sala = $this->sala->firstOrNew(['Id_Sala' => $input['Id_Sala']]);
        $sala->fill($input);

        if ($sala->save()) {
            return redirect('admin/sala');
        } else {
            return view('cms.pages.sala.form', compact('sala', 'options', 'errors'));   
        }
    }

    public function edit($id = null)
    {
        $sala    = $this->sala->where('Id_Sala', $id)->first();
        $options = ['SIM' => 'Sim', 'NAO' => 'Não' ];  
        
        return view('cms.pages.sala.form', compact('sala', 'options'));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->sala->where('Id_Sala', $input['id'])->delete();

        return response()->json(['success' => true], 200, []);
    }
}
