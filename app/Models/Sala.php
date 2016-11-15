<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model {

	protected $table = 'Sala';
	protected $fillable = ['Id_Sala', 'Descricao', 'Adaptada'];
	
}