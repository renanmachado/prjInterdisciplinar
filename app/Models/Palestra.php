<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestra extends Model {

	protected $table = 'Palestra';
	protected $fillable = ['Id_Palestra', 'Titulo ', 'DataHora', 'Imagem', 'Descricao', 'Conteudo', 'Id_Evento', 'Id_Sala' ];
	
    public function evento() {
        return $this->hasOne('App\Models\Evento', 'Id_Evento', 'Id_Evento');
    }
}