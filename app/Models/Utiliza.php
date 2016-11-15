<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utiliza extends Model {

	protected $table = 'Utiliza';
	protected $fillable = ['Id_Palestra', 'Id_Equipe'];
	   
}