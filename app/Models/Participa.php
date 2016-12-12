<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participa extends Model {

	protected $table = 'Participa';
	protected $fillable = ['RA', 'Id_Palestra'];
	public $timestamps    = false;

    
}