<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestra extends Model {

	protected $table = 'Palestra';
	protected $fillable = ['Id_Palestra', 'DataHora', 'Titulo','Imagem', 'Descricao', 'Conteudo', 'Id_Evento', 'Id_Sala' ];
	protected $primaryKey = "Id_Palestra";
	public $timestamps    = false;
	
    public function evento() {
        return $this->hasOne('App\Models\Evento', 'Id_Evento', 'Id_Evento');
    }
    
	public function palestrantes() {
        return $this->belongsToMany('App\Models\Palestrante', 'Ministra', 'Id_Palestra', 'Id_Palestrante');
    }
}