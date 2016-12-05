<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
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
        return view('cms.pages.palestrante.form', compact('palestrante'));
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $palestrante = $this->palestrante->firstOrNew(['Id_Palestrante' => $input['Id_Palestrante']]);
        $palestrante->fill($input);

        if ($palestrante->save()) {
            return redirect('admin/palestrante');
        } else {
            return view('cms.pages.palestrante.form', compact('palestrante', 'errors'));    
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $palestrante = $this->palestrante->where('Id_Palestrante', $id)->first();

        return view('cms.pages.palestrante.form', compact('palestrante'));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->palestrante->where('Id_Palestrante', $input['Id_Palestrante'])->delete();

        return response()->json(['success' => true], 200, []);
    }

    public function upload() 
    {
        if(Request::hasFile('file')) {
          //upload an image to the /img/tmp directory and return the filepath.
          $file = Request::file('file');
          $tmpFilePath = '/uploads/palestrantes/';
          $tmpFileName = time() . '-' . $file->getClientOriginalName();
          $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
          $path = $tmpFilePath . $tmpFileName;
          return response()->json(array('path'=> $path, 'input_name' => Request::get("input-name")), 200);
        } else {
          return response()->json(false, 200);
        }
    }
}
