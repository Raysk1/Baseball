<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Temporada
 * 
 * @property int $idTemporada
 * @property int $idLiga
 * @property string|null $grupo
 * @property string|null $categoria
 * @property string|null $momento
 * @property string|null $temporada
 *
 * @package App\Models
 */
class Temporada extends Model
{
	protected $table = 'temporadas';
	protected $primaryKey = 'idTemporada';
	public $timestamps = false;

	protected $casts = [
		'idLiga' => 'int'
	];

	protected $fillable = [
		'idLiga',
		'grupo',
		'categoria',
		'momento',
		'temporada'
	];
}
