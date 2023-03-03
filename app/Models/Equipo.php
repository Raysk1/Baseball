<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 * 
 * @property int $idEquipo
 * @property string|null $nombre
 * @property int $idLogo
 * @property string|null $ciudad
 * @property int $idTecnico
 *
 * @package App\Models
 */
class Equipo extends Model
{
	protected $table = 'equipos';
	protected $primaryKey = 'idEquipo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idEquipo' => 'int',
		'idLogo' => 'int',
		'idTecnico' => 'int'
	];

	protected $fillable = [
		'nombre',
		'idLogo',
		'ciudad',
		'idTecnico'
	];
}
