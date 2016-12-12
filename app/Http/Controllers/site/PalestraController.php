<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Palestra;
use App\Models\Participa;
use App\Models\Aluno; 
use Request;
use DB;

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
        //
        $this->palestra = $palestra;
    }

    public function certificado()
    {
                
        return view("site/certificado");
    }

    public function confirmar_presenca($id)
    {
        $input    = Request::all();
        $palestra = Palestra::where('Id_Palestra', $id)->first();
        
        if (is_null($palestra)) {
            return view('site/404');
        }

        return view("site/confirmar-presenca", compact('palestra'));
    }

    public function confirmar_presenca_salvar()
    {   
        $input     = Request::all();
        $palestra  = Palestra::where('Id_Palestra', $input['Id_Palestra'])->first();
        $aluno     = Aluno::where('RA', $input['RA'])->first();
        

        if(is_null($aluno)) {
            $msgs[] = "RA não encontrado!";
        } else {
            $participa = Participa::firstOrNew(['RA' => $input['RA'], 'Id_Palestra' => $palestra->Id_Palestra]);

            if($participa->save()) {
                $msgs[] = "Presença confirmada!";
            } else {
                $msgs[] = "Erro ao confirmar Presença!"; 
            }
        }

        return view("site/confirmar-presenca", compact('msgs', 'palestra'));
    }

}
