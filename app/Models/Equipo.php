<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 * 
 * @property int $idEquipo
 * @property string|null $nombre
 * @property string|null $ciudad
 * @property int $idTecnico
 * 
 * @property Manejador $manejador
 * @property Collection|Juego[] $juegos
 * @property Collection|Roster[] $rosters
 * @property Collection|Turno[] $turnos
 *
 * @package App\Models
 */
class Equipo extends Model
{
	protected $table = 'equipos';
	protected $primaryKey = 'idEquipo';
	public $timestamps = false;

	protected $casts = [
		'idTecnico' => 'int'
	];

	protected $fillable = [
		'nombre',
		'ciudad',
		'idTecnico'
	];

	public function manejador()
	{
		return $this->belongsTo(Manejador::class, 'idTecnico');
	}

	public function juegos()
	{
		return $this->hasMany(Juego::class, 'idEquipoLocal');
	}

	public function rosters()
	{
		return $this->hasMany(Roster::class, 'idEquipo');
	}

	public function turnos()
	{
		return $this->hasMany(Turno::class, 'idEquipo');
	}
}
