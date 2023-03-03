<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ampayersjuego
 * 
 * @property int $idJuego
 * @property int $idAmpayer
 * @property string|null $ubicacion
 *
 * @package App\Models
 */
class Ampayersjuego extends Model
{
	protected $table = 'ampayersjuego';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'idAmpayer' => 'int'
	];

	protected $fillable = [
		'idJuego',
		'idAmpayer',
		'ubicacion'
	];
}
