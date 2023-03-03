<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Juego
 * 
 * @property int $idJuego
 * @property int $idTemporada
 * @property int|null $jornada
 * @property int $idCampo
 * @property Carbon|null $fecha
 * @property Carbon|null $hora
 * @property string|null $clima
 * @property int $idEquipoVisitante
 * @property int $idEquipoLocal
 * @property int|null $final
 * @property int $idAviso
 * @property int $idCuerpo
 *
 * @package App\Models
 */
class Juego extends Model
{
	protected $table = 'juegos';
	protected $primaryKey = 'idJuego';
	public $timestamps = false;

	protected $casts = [
		'idTemporada' => 'int',
		'jornada' => 'int',
		'idCampo' => 'int',
		'idEquipoVisitante' => 'int',
		'idEquipoLocal' => 'int',
		'final' => 'int',
		'idAviso' => 'int',
		'idCuerpo' => 'int'
	];

	protected $dates = [
		'fecha',
		'hora'
	];

	protected $fillable = [
		'idTemporada',
		'jornada',
		'idCampo',
		'fecha',
		'hora',
		'clima',
		'idEquipoVisitante',
		'idEquipoLocal',
		'final',
		'idAviso',
		'idCuerpo'
	];
}
