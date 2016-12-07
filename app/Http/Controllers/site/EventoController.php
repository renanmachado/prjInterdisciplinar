<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use App\Models\Palestrante;
use App\Models\Palestra;
use DB;

class EventoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $evento;
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

    public function __construct(Evento $evento)
    {
        //
        $this->evento = $evento;
    }

    public function evento($id)
    {
        $evento       = $this->evento->where("Id_Evento", $id)->first();
        $horas        = $this->horas;
        $palestras    = Palestra::select('Palestra.*', 
                            DB::raw('DATE_FORMAT(DataHora, "%d.%m.%Y") as Data'),
                            DB::raw('DATE_FORMAT(DataHora, "%T") as Hora') 
                        )
                        ->with('palestrantes')
                        ->where("Id_Evento", $evento->Id_Evento)
                        ->orderBy('DataHora')
                        ->get();

        $palestrantes = Palestrante::select('Palestrante.*')
                        ->join('Ministra', 'Ministra.Id_Palestrante', '=', 'Palestrante.Id_Palestrante')
                        ->join('Palestra', 'Palestra.Id_Palestra', '=', 'Ministra.Id_Palestra')
                        ->where('Palestra.Id_Evento', $evento->Id_Evento)
                        ->groupBY('Id_Palestrante')->get();

        $palestrasEvento = [];

        foreach($palestras as $palestra) {
            $palestrasEvento[$palestra->Data][] = $palestra;
        }
        //dd($palestrasEvento);
        return view("site/evento", compact('evento', 'palestras','palestrantes', 'palestrasEvento','horas'));
    }

    //
}
