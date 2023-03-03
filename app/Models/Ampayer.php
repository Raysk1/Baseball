<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
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
 * @package App\Models
 */
class Ampayer extends Model
{
	protected $table = 'ampayers';
	protected $primaryKey = 'idAmpayer';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool'
	];

	protected $dates = [
		'fechaNacimiento'
	];

	protected $fillable = [
		'nombre',
		'apellidos',
		'fechaNacimiento',
		'curp',
		'abreviacion',
		'activo'
	];
}
