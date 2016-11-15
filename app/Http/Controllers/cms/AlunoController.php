<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests;
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
        return redirect('/admin/aluno/editar/' . $aluno->id);
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $aluno = $this->aluno->where('id', $input['id'])->first();
        $aluno->fill($input);

        if ($aluno->save()) {
            return redirect('admin/aluno');
        } else {
            return view('cms.pages.aluno.form', compact($aluno, $errors));    
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $aluno = $this->aluno->where('id', $input['id'])->first();
        
        return view('cms.pages.aluno.form', compact($aluno));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->aluno->where('id', $input['id'])->delete();

        return response()->json([]);
    }
}
