<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
use App\User;
use Auth;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $usuario;

    public function __construct(User $usuario)
    {   
        $this->middleware('auth');
        $this->usuario = $usuario;
    }

    public function index()
    {   
        $usuario  = $this->usuario->where("email", Auth::user()->email );
        return view('cms.pages.usuario.form', compact('usuario'));
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $usuario = $this->usuario->where('id', $input['id'])->first();
        $usuario->fill($input);

        if ($usuario->save()) {
            return redirect('admin/minha-conta');
        } else {
            return view('cms.pages.usuario.form', compact($usuario, $errors));    
        }
    }

    
}
