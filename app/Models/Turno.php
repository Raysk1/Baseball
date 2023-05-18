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
 * @property int $idBateadores
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
 * @property Juego $juego
 * @property Equipo $equipo
 * @property Lanzador $lanzador
 * @property Bateador $bateador
 *
 * @package App\Models
 */
class Turno extends Model
{
	protected $table = 'turnos';
	protected $primaryKey = 'idTurno';
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'idEquipo' => 'int',
		'idBateadores' => 'int',
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
		'idBateadores',
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

	public function juego()
	{
		return $this->belongsTo(Juego::class, 'idJuego');
	}

	public function equipo()
	{
		return $this->belongsTo(Equipo::class, 'idEquipo');
	}

	public function lanzador()
	{
		return $this->belongsTo(Lanzador::class, 'idLanzador');
	}

	public function bateador()
	{
		return $this->belongsTo(Bateador::class, 'idBateadores');
	}
}
