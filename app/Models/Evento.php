<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

	protected $table = 'Evento';
	protected $fillable = ['Id_Evento', 'Nome', 'Dt_Inicial_Inscricao', 'Dt_Final_Inscricao', 'Dt_Inicial_Execucao', 'Dt_Final_Execucao', 'Dt_Final_Disponibilidade', 
						   'Dt_Inicio_Disponibilidade', 'Id_Status'];

    
}
