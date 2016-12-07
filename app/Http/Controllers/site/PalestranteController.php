<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Palestrante;
use DB;

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
        //
        $this->palestrante = $palestrante;
    }

    public function palestrante()
    {
        $palestrantes = Palestrante::get();        
        return view("site/palestrantes", compact('palestrantes'));
    }
}
