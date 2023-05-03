<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Turno
 * 
 * @property int $idTurno
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
 * @property Equipo $equipo
 * @property Jugador $jugadore
 * @property Juego $juego
 *
 * @package App\Models
 */
class Turno extends Model
{
	protected $table = 'turnos';
	protected $primaryKey = 'idTurno';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idTurno' => 'int',
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

	public function equipo()
	{
		return $this->belongsTo(Equipo::class, 'idEquipo');
	}

	public function jugador()
	{
		return $this->belongsTo(Jugador::class, 'idAfiliacion');
	}

	public function juego()
	{
		return $this->belongsTo(Juego::class, 'idJuego');
	}
}
