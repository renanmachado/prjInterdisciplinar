<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model {

	protected $table      = 'Aluno';
	protected $fillable   = ['RA', 'Nome', 'Email', 'Telefone', 'Senha'];
	protected $primaryKey = "RA";
	public $timestamps    = false;
	
	public function palestras() {
        return $this
                    ->belongsToMany('App\Models\Palestra', 'Participa', 'RA', 'Id_Palestra');
    }

}