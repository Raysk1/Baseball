<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ampayerscuerpo
 * 
 * @property int $idCuerpo
 * @property int $idAmpayers
 * @property int $idJuego
 *
 * @package App\Models
 */
class Ampayerscuerpo extends Model
{
	protected $table = 'ampayerscuerpo';
	protected $primaryKey = 'idCuerpo';
	public $timestamps = false;

	protected $casts = [
		'idAmpayers' => 'int',
		'idJuego' => 'int'
	];

	protected $fillable = [
		'idAmpayers',
		'idJuego'
	];
}
