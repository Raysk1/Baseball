<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Turno
 * 
 * @property int $idJuego
 * @property int $idEquipo
 * @property int $idAfiliacion
 * @property int|null $turno
 * @property int|null $inning
 * @property int|null $posicion
 * @property string|null $tipo
 * @property string|null $resultado
 * @property bool|null $carrera
 * @property int|null $producciones
 * @property string|null $detalles
 * @property int $idLanzador
 *
 * @package App\Models
 */
class Turno extends Model
{
	protected $table = 'turnos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'idEquipo' => 'int',
		'idAfiliacion' => 'int',
		'turno' => 'int',
		'inning' => 'int',
		'posicion' => 'int',
		'carrera' => 'bool',
		'producciones' => 'int',
		'idLanzador' => 'int'
	];

	protected $fillable = [
		'idJuego',
		'idEquipo',
		'idAfiliacion',
		'turno',
		'inning',
		'posicion',
		'tipo',
		'resultado',
		'carrera',
		'producciones',
		'detalles',
		'idLanzador'
	];
}
