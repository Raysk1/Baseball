<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Manejadore
 * 
 * @property int $idTecnico
 * @property string|null $nombre
 * @property string|null $tipo
 * 
 * @property Collection|Equipo[] $equipos
 *
 * @package App\Models
 */
class Manejador extends Model
{
	protected $table = 'manejadores';
	protected $primaryKey = 'idTecnico';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'tipo'
	];

	public function equipos()
	{
		return $this->hasMany(Equipo::class, 'idTecnico');
	}
}
