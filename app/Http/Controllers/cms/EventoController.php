<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Evento;

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
        $this->evento = $evento;
    }

    public function index()
    {   
        
        $eventos  = $this->evento->get();

        return view('cms.pages.evento.list', compact($eventos));
    }

    public function create()
    {
        $evento = $this->evento;
        return redirect('/admin/evento/editar/' . $evento->id);
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $evento = $this->evento->where('id', $input['id'])->first();
        $evento->fill($input);

        if ($evento->save()) {
            return redirect('admin/evento');
        } else {
            return view('cms.pages.evento.form', compact($evento, $errors));    
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $evento = $this->evento->where('id', $input['id'])->first();
        
        return view('cms.pages.evento.form', compact($evento));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->evento->where('id', $input['id'])->delete();

        return response()->json([]);
    }
}
