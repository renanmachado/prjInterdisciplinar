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

    public function solicitar_certificado()
    {   
        $input     = Request::all();
        $aluno     = Aluno::where('RA', $input['RA'])->first();

        if(is_null($aluno)) {
            $msgs[] = "RA não encontrado!";
            return view("site/certificado", compact('msgs'));
        } else {
            return redirect("palestra/solicitar-certificado/participante/". $aluno->RA);
        }
    }

    public function solicitar_certificado_participante($id)
    {   
        $input     = Request::all();
        $aluno     = Aluno::where('RA', $id)->first();

        if (is_null($aluno) ) {
            return view('site/404');
        }

        $palestras = $aluno->palestras->lists('Titulo', 'Id_Palestra')->toArray();
        $palestras = ["0" => "Selecione a palestra" ] + $palestras;

        return view("site/certificado-palestra", compact('aluno', 'palestras'));
    }

    public function solicitar_certificado_gerar()
    {   
        $input     = Request::all();
        $aluno     = Aluno::where('RA', $input['RA'])->first();
        $palestra  = $aluno->palestras->find($input['Id_Palestra']);
        $palestras = $aluno->palestras->lists('Titulo', 'Id_Palestra')->toArray();
        $palestras = ["0" => "Selecione a palestra" ] + $palestras;

        if (is_null($palestra)) {
            $msgs[] = "Selecione a palestra!";
            return view("site/certificado-palestra", compact('aluno', 'palestras', 'msgs'));
        }

        $palestrante = empty($palestrante->palestrantes) ? "Não definido" : $palestrante->palestrantes->first()->Nome;  
        $data        = date('d/m/Y', strtotime($palestra->DataHora));

        $this->gerar_certificado($aluno->Nome, $palestra->Titulo, $palestrante, $data);
        
    }


    private function gerar_certificado($nome, $palestra, $palestrante, $data) {
        //$nome        = "Renan Machado";
        //$palestra    = "PHP Com silvio veigas";
        //$palestrante = "Silvio Veigas";
        //$data        = "30/11/2016";
        $fonte       = "site/certificado/mono.ttf";

        $image = imagecreatefromjpeg('site/certificado/certificado.jpg');
        
        imagealphablending($image, true);

        $black = imagecolorallocate($image, 0,0, 0);

        imagefttext($image, 60, 0, 1293, 1298, $black, $fonte, $nome);
        imagefttext($image, 60, 0, 996, 1391, $black, $fonte, $palestra); 
        imagefttext($image, 60, 0, 657, 1483, $black, $fonte, $palestrante); 
        imagefttext($image, 60, 0, 503, 1576, $black, $fonte, $data);
        
        $filename = 'site/certificado/certificado-participante.png';
        ImagePng($image,$filename);

        header('Pragma: public');
        header('Cache-Control: public, no-cache');
        header('Content-Type: application/octet-stream');
        header('Content-Length: ' . filesize($filename));
        header('Content-Disposition: attachment; filename="' .
        basename($filename) . '"');
        header('Content-Transfer-Encoding: binary');
        readfile($filename);
        imagedestroy($image);
    }
}
