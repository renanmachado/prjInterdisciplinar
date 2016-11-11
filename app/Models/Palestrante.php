<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model {

	protected $table = 'Palestrante';
	protected $fillable = ['Id_Palestrante', 'Nome', 'Minicurriculo', 'Foto'];

    
}