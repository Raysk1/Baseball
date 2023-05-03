<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
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
 * 
 * @property Temporada $temporada
 * @property Parque $parque
 * @property Equipo $equipo
 * @property Collection|Ampayer[] $ampayers
 * @property Collection|Bateador[] $bateadores
 * @property Collection|Lanzador[] $lanzadores
 * @property Collection|Turno[] $turnos
 *
 * @package App\Models
 */
class Juego extends Model {
	protected $table = 'juegos';
	protected $primaryKey = 'idJuego';
	public $timestamps = false;

	protected $casts = [
		'idTemporada' => 'int',
		'jornada' => 'int',
		'idCampo' => 'int',
		'idEquipoVisitante' => 'int',
		'idEquipoLocal' => 'int',
		'final' => 'int'
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
		'final'
	];

	public function temporada() {
		return $this->belongsTo(Temporada::class, 'idTemporada');
	}

	public function parque() {
		return $this->belongsTo(Parque::class, 'idCampo');
	}

	public function equipoLocal()
	{
		return $this->belongsTo(Equipo::class, 'idEquipoLocal');
	}

	public function equipoVisitante()
	{
		return $this->belongsTo(Equipo::class, 'idEquipoVisitante');
	}

	public function ampayers()
	{
		return $this->belongsToMany(Ampayer::class, 'ampayersjuego', 'idJuego', 'idAmpayer')
			->withPivot('idCuerpo', 'ubicacion');
	}

	public function bateadores() {
		return $this->hasMany(Bateador::class, 'idJuego');
	}

	public function lanzadores() {
		return $this->hasMany(Lanzador::class, 'idJuego');
	}

	public function turnos() {
		return $this->hasMany(Turno::class, 'idJuego');
	}
}