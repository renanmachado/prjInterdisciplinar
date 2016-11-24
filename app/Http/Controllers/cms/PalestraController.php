<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Palestra;

class PalestraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $palestra;

    public function __construct(Palestra $palestra)
    {   
        $this->middleware('auth');
        $this->palestra = $palestra;
    }

    public function index()
    {   

        $palestras  = $this->palestra->get();

        return view('cms.pages.palestra.list', compact('palestras'));
    }
    
    public function create()
    {
        $palestra = $this->palestra;
        return redirect('/admin/palestra/editar/' . $palestra->id);
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $palestra = $this->palestra->where('id', $input['id'])->first();
        $palestra->fill($input);

        if ($palestra->save()) {
            return redirect('admin/palestra');
        } else {
            return view('cms.pages.palestra.form', compact($palestra, $errors));    
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $palestra = $this->palestra->where('id', $input['id'])->first();
        
        return view('cms.pages.palestra.form', compact($palestra));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->palestra->where('id', $input['id'])->delete();

        return response()->json([]);
    }
}
