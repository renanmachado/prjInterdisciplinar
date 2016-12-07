<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

	protected $table = 'Evento';
	protected $fillable = ['Id_Evento', 'Nome', 'Dt_Inicial_Inscricao', 'Dt_Final_Inscricao', 'Dt_Inicial_Execucao', 'Dt_Final_Execucao', 'Dt_Final_Disponibilidade', 'Dt_Inicio_Disponibilidade', 'Imagem', 'Id_Status'];
	protected $primaryKey = "Id_Evento";
	public $timestamps    = false;
	
	public function status() {
        return $this->hasOne('App\Models\Status', 'Id_Status', 'Id_Status');
    }

    public function palestras() {
    	return $this->hasMany('App\Models\Palestra', 'Id_Evento', 'Id_Evento')->groupBy("DataHora");
    }
    
    public function rules()
	{
	    return [
	        'nome' => 'required|max:255'
	    ];
	}

	public function messages()
	{
	    return [
	        'title.required' => 'A title is required',
	        'body.required'  => 'A message is required',
	    ];
	}
        
}
