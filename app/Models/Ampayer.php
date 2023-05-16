<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ampayer
 * 
 * @property int $idAmpayer
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property Carbon|null $fechaNacimiento
 * @property string|null $curp
 * @property string|null $abreviacion
 * @property bool|null $activo
 * 
 * @property Collection|Juego[] $juegos
 *
 * @package App\Models
 */
class Ampayer extends Model
{
	protected $table = 'ampayers';
	protected $primaryKey = 'idAmpayer';
	public $timestamps = false;

	protected $casts = [
		'fechaNacimiento' => 'datetime',
		'activo' => 'bool'
	];

	protected $fillable = [
		'nombre',
		'apellidos',
		'fechaNacimiento',
		'curp',
		'abreviacion',
		'activo'
	];

	public function juegos()
	{
		return $this->belongsToMany(Juego::class, 'ampayersjuego', 'idAmpayer', 'idJuego')
					->withPivot('idCuerpo', 'ubicacion');
	}
}
