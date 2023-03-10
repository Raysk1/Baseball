<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lanzadore
 * 
 * @property int $idJuego
 * @property int $idAfiliacion
 * @property float|null $IP
 * @property int|null $BA
 * @property int|null $C
 * @property int|null $H
 * @property int|null $BB
 * @property int|null $K
 * @property float|null $PCA
 * @property float|null $POP
 *
 * @package App\Models
 */
class Lanzador extends Model
{
	protected $table = 'lanzadores';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'idAfiliacion' => 'int',
		'IP' => 'float',
		'BA' => 'int',
		'C' => 'int',
		'H' => 'int',
		'BB' => 'int',
		'K' => 'int',
		'PCA' => 'float',
		'POP' => 'float'
	];

	protected $fillable = [
		'idJuego',
		'idAfiliacion',
		'IP',
		'BA',
		'C',
		'H',
		'BB',
		'K',
		'PCA',
		'POP'
	];
}
