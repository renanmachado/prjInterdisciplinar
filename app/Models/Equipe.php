<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model {

	protected $table = 'Equipe';
	protected $fillable = ['Id_Equipe', 'Nome', 'Email', 'Telefone', 'Senha'];

    
}