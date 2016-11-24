<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $equipe;

    public function __construct(Equipe $equipe)
    {   
        $this->middleware('auth');
        $this->equipe = $equipe;
    }

    public function index()
    {   

        $equipes  = $this->equipe->get();

        return view('cms.pages.equipe.list', compact('equipes'));
    }
    
    public function create()
    {
        $equipe = $this->equipe;
        return view('cms.pages.equipe.form', compact('equipe'));
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $equipe = $this->equipe->firstOrNew(['Id_Equipe' => $input['Id_Equipe']]);
        $equipe->fill($input);

        if ($equipe->save()) {
            return redirect('admin/equipe');
        } else {
            return view('cms.pages.equipe.form', compact('equipe', 'errors'));    
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $equipe = $this->equipe->where('Id_Equipe', $id)->first();
        
        return view('cms.pages.equipe.form', compact('equipe'));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->equipe->where('Id_Equipe', $input['id'])->delete();

        return response()->json(['success' => true], 200, []);
    }
}
