<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Evento;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $evento;
    private $perpage = 12;

    public function __construct(Evento $evento)
    {
        //
        $this->evento = $evento;
    }

    public function index()
    {
        $cont      = 0;
        $eventos   = $this->evento->paginate($this->perpage);
        
        return view("site/index", compact('eventos', "cont"));

    }

    //
}
