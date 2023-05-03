<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Roster
 * 
 * @property int $idRoster
 * @property int $idEquipo
 * @property int $idTemporada
 * @property int $idAfiliacion
 * 
 * @property Equipo $equipo
 * @property Temporada $temporada
 * @property Jugador $jugador
 *
 * @package App\Models
 */
class Roster extends Model
{
	protected $table = 'rosters';
	protected $primaryKey = 'idRoster';
	public $timestamps = false;

	protected $casts = [
		'idEquipo' => 'int',
		'idTemporada' => 'int',
		'idAfiliacion' => 'int'
	];

	protected $fillable = [
		'idEquipo',
		'idTemporada',
		'idAfiliacion'
	];

	public function equipo()
	{
		return $this->belongsTo(Equipo::class, 'idEquipo');
	}

	public function temporada()
	{
		return $this->belongsTo(Temporada::class, 'idTemporada');
	}

	public function jugador()
	{
		return $this->belongsTo(Jugador::class, 'idAfiliacion');
	}
}
