<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Palestra;
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

    public function certificado($id = null)
    {
                
        return view("site/certificado");
    }
}
