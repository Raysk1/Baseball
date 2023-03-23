<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bateadore
 * 
 * @property int $idJuego
 * @property int $idAfiliacion
 * @property int|null $AB
 * @property int|null $C
 * @property int|null $H
 * @property int|null $CP
 * @property int|null $BB
 * @property int|null $K
 * @property int|null $idBateadores
 * @property float|null $PJE
 * @property float|null $OBP
 *
 * @package App\Models
 */
class Bateador extends Model
{
	protected $primaryKey = 'idBateadores';
	protected $table = 'bateadores';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'idAfiliacion' => 'int',
		'AB' => 'int',
		'C' => 'int',
		'H' => 'int',
		'CP' => 'int',
		'BB' => 'int',
		'K' => 'int',
		'PJE' => 'float',
		'OBP' => 'float'
	];

	protected $fillable = [
		'idJuego',
		'idAfiliacion',
		'AB',
		'C',
		'H',
		'CP',
		'BB',
		'K',
		'PJE',
		'OBP'
	];
}
