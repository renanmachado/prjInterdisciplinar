<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $aluno;

    public function __construct(Aluno $aluno)
    {   
        $this->middleware('auth');
        $this->aluno = $aluno;
    }

    public function index()
    {   

        $alunos  = $this->aluno->get();

        return view('cms.pages.aluno.list', compact('alunos'));
    }
    
    public function create()
    {
        $aluno = $this->aluno;
        return view('cms.pages.aluno.form', compact('aluno'));
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $aluno  = $this->aluno->firstOrNew(['RA' => $input['id']]);
        $aluno->fill($input);

        if ($aluno->save()) {
            return redirect('admin/aluno');
        } else {
            return view('cms.pages.aluno.form', compact('aluno', 'errors'));  
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $aluno = $this->aluno->where('RA', $id)->first();
        
        return view('cms.pages.aluno.form', compact('aluno'));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->aluno->where('RA', $input['id'])->delete();

        return response()->json(['success' => true], 200, []);
    }
}
