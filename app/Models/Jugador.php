<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Jugadore
 * 
 * @property int $idAfiliacion
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property Carbon|null $fechaNacimiento
 * @property string|null $curp
 * @property int|null $posicion
 * @property string|null $golpea
 * @property string|null $tira
 * @property string|null $abreviacion
 * @property int|null $status
 * @property string|null $rama
 * 
 * @property Collection|Bateador[] $bateadores
 * @property Collection|Lanzador[] $lanzadores
 * @property Collection|Roster[] $rosters
 * @property Collection|Turno[] $turnos
 *
 * @package App\Models
 */
class Jugador extends Model
{
	use HasFactory;
	protected $table = 'jugadores';
	protected $primaryKey = 'idAfiliacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idAfiliacion' => 'int',
		'fechaNacimiento' => 'datetime',
		'posicion' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'nombre',
		'apellidos',
		'fechaNacimiento',
		'curp',
		'posicion',
		'golpea',
		'tira',
		'abreviacion',
		'status',
		'rama'
	];

	public function bateadores()
	{
		return $this->hasMany(Bateador::class, 'idAfiliacion');
	}

	public function lanzadores()
	{
		return $this->hasMany(Lanzador::class, 'idAfiliacion');
	}

	public function rosters()
	{
		return $this->hasMany(Roster::class, 'idAfiliacion');
	}

	public function turnos()
	{
		return $this->hasMany(Turno::class, 'idAfiliacion');
	}
}
