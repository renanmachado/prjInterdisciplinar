<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PalestraRecurso  extends Model {

	protected $table = 'Palestra_Recurso ';
	protected $fillable = ['Id_Palestra', 'Id_Recurso'];

    
}