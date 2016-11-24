<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model {

	protected $table      = 'Recurso';
	protected $fillable   = ['Id_Recurso', 'Descricao', 'Quantidade'];
	protected $primaryKey = "Id_Recurso";
	public $timestamps    = false;
}