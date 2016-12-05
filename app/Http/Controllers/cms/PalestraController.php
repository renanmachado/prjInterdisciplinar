<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Palestra;
use App\Models\Sala;
use App\Models\Evento;

class PalestraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $palestra;
    private $horas  = [ 
                        "00:00:00" => "00:00 am",
                        "01:00:00" => "1:00 am",
                        "02:00:00" => "2:00 am",
                        "03:00:00" => "3:00 am",
                        "04:00:00" => "4:00 am",
                        "05:00:00" => "5:00 am",
                        "06:00:00" => "6:00 am",
                        "07:00:00" => "7:00 am",
                        "08:00:00" => "8:00 am",
                        "09:00:00" => "9:00 am",
                        "10:00:00" => "10:00 am",
                        "11:00:00" => "11:00 am",
                        "12:00:00" => "12:00 pm",
                        "13:00:00" => "1:00 pm",
                        "14:00:00" => "2:00 pm",
                        "15:00:00" => "3:00 pm",
                        "16:00:00" => "4:00 pm",
                        "17:00:00" => "5:00 pm",
                        "18:00:00" => "6:00 pm",
                        "19:00:00" => "7:00 pm",
                        "20:00:00" => "8:00 pm",
                        "21:00:00" => "9:00 pm",
                        "22:00:00" => "10:00 pm",
                        "23:00:00" => "11:00 pm"
                    ];

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
        $salas    = Sala::get()->lists('Descricao', 'Id_Sala')->toArray();
        $eventos  = Evento::get()->lists('Nome', 'Id_Evento')->toArray(); 
        $horas    = $this->horas;

        return view('cms.pages.palestra.form', compact('palestra', 'salas', 'eventos', 'horas'));
    }

    public function save()
    {
        $errors = [];
        $input  = Request::all();
        $input['DataHora'] = date('Y/m/d H:i:s', strtotime($input['DataHora'] . " " . $input['Hora']));

        $palestra = $this->palestra->firstOrNew(['Id_Palestra' => $input['Id_Palestra']]);
        $palestra->fill($input);
        $salas    = Sala::get()->lists('Descricao', 'Id_Sala')->toArray();
        $eventos  = Evento::get()->lists('Nome', 'Id_Evento')->toArray(); 
        $horas    = $this->horas;
        
        if ($palestra->save()) {
            return redirect('admin/palestra');
        } else {
            return view('cms.pages.palestra.form', compact('palestra', 'salas', 'eventos','horas', 'errors'));   
        }
    }

    public function edit($id = null)
    {
        $input  = Request::all();
        $palestra = $this->palestra->where('Id_Palestra', $id)->first();
        $salas    = Sala::get()->lists('Descricao', 'Id_Sala')->toArray();
        $eventos  = Evento::get()->lists('Nome', 'Id_Evento')->toArray();
        $horas    = $this->horas; 

        return view('cms.pages.palestra.form', compact('palestra', 'salas', 'eventos', 'horas'));
    }

    public function destroy()
    {
        $input = Request::all();
        $this->palestra->where('Id_Palestra', $input['Id_Palestra'])->delete();

        return response()->json(['success' => true], 200, []);
    }

    public function upload() 
    {
        if(Request::hasFile('file')) {
          //upload an image to the /img/tmp directory and return the filepath.
          $file = Request::file('file');
          $tmpFilePath = '/uploads/palestras/';
          $tmpFileName = time() . '-' . $file->getClientOriginalName();
          $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
          $path = $tmpFilePath . $tmpFileName;
          return response()->json(array('path'=> $path, 'input_name' => Request::get("input-name")), 200);
        } else {
          return response()->json(false, 200);
        }
    }
}
