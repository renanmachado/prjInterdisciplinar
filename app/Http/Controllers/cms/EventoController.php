<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Evento;
use App\Models\Status;

class EventoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $evento;

    public function __construct(Evento $evento)
    {   
        $this->middleware('auth');
        $this->evento = $evento;
    }

    public function index()
    {   

        $eventos  = $this->evento->get();

        return view('cms.pages.evento.list', compact('eventos'));
    }

    public function create()
    {
        $evento = $this->evento;
        $status = Status::lists('Descricao', 'Id_Status')->toArray(); 
        return view('cms.pages.evento.form', compact('evento', 'status'));
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        
        $input['Dt_Inicial_Inscricao']        = date('Y/m/d', strtotime($input['Dt_Inicial_Inscricao']));
        $input['Dt_Inicial_Execucao']         = date('Y/m/d', strtotime($input['Dt_Inicial_Execucao']));
        $input['Dt_Inicio_Disponibilidade']   = date('Y/m/d', strtotime($input['Dt_Inicio_Disponibilidade']));
        $input['Dt_Final_Inscricao']          = date('Y/m/d', strtotime($input['Dt_Final_Inscricao']));
        $input['Dt_Final_Execucao']           = date('Y/m/d', strtotime($input['Dt_Final_Execucao']));
        $input['Dt_Final_Disponibilidade']    = date('Y/m/d', strtotime($input['Dt_Final_Disponibilidade']));

        $evento = $this->evento->where('Id_Evento', $input['Id_Evento'])->first();
        $evento->fill($input);
        $status = Status::get()->lists('Descricao', 'Id_Status')->toArray();

        if ($evento->save()) {
            return redirect('admin/evento');
        } else {
             return view('cms.pages.evento.form', compact('evento', 'errors'));
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $evento = $this->evento->where('Id_Evento', $id)->first();
        $status = Status::get()->lists('Descricao', 'Id_Status')->toArray();

        return view('cms.pages.evento.form', compact('evento', 'status'));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->evento->where('Id_Evento', $input['Id_Evento'])->delete();

        return response()->json(['success' => true], 200, []);
    }

    public function uplaod(){

    }
}
