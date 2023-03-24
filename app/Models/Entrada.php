<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrada
 * 
 * @property int $idJuego
 * @property int|null $entradaAlta
 * @property int|null $entradaBaja
 * @property int|null $carrerasAlta
 * @property int|null $carrerasBaja
 * @property int|null $idCarrera
 * @property int|null $idEntrada
 * 
 * @package App\Models
 */
class Entrada extends Model
{
	protected $table = 'entradas';
	protected $primaryKey = 'idEntrada';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'entradaAlta' => 'int',
		'entradaBaja' => 'int',
		'carrerasAlta' => 'int',
		'carrerasBaja' => 'int'
	];

	protected $fillable = [
		'idJuego',
		'entradaAlta',
		'entradaBaja',
		'carrerasAlta',
		'carrerasBaja'
	];
}
