<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lanzadoresrecord
 * 
 * @property int $idJuego
 * @property int $idAfiliacion
 * @property string|null $resultado
 *
 * @package App\Models
 */
class Lanzadoresrecord extends Model
{
	protected $table = 'lanzadoresrecord';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'idAfiliacion' => 'int'
	];

	protected $fillable = [
		'idJuego',
		'idAfiliacion',
		'resultado'
	];
}
