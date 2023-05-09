<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
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
 * @property string|null $pagina
 * @property string|null $abreviacion
 * @property bool|null $status
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
	protected $table = 'jugadores';
	protected $primaryKey = 'idAfiliacion';
	public $timestamps = false;

	protected $casts = [
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
		'rama',
		'imagen'
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
