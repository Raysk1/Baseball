<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Jugador
 * 
 * @property int $idAfiliacion
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property Carbon|null $fechaNacimiento
 * @property string|null $curp
 * @property int|null $posicion
 * @property string|null $golpea
 * @property string|null $tira
 * @property string|null $pagina
 * @property string|null $abreviacion
 * @property bool|null $status
 * @property string $rama
 *
 * @package App\Models
 */
class Jugador extends Model
{
	protected $table = 'jugadores';
	protected $primaryKey = 'idAfiliacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idAfiliacion' => 'int',
		'posicion' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'fechaNacimiento'
	];

	protected $fillable = [
		'nombre',
		'apellidos',
		'fechaNacimiento',
		'curp',
		'posicion',
		'golpea',
		'tira',
		'pagina',
		'abreviacion',
		'status',
		'rama'
	];
}
