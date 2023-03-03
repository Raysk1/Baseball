<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Liga
 * 
 * @property int $idLiga
 * @property string|null $descripcion
 * @property string|null $presidente
 * @property string|null $coordinador
 * @property string|null $mapa
 * @property string|null $direccion
 * @property int|null $telefono
 * @property string|null $redes
 *
 * @package App\Models
 */
class Liga extends Model
{
	protected $table = 'ligas';
	protected $primaryKey = 'idLiga';
	public $timestamps = false;

	protected $casts = [
		'telefono' => 'int'
	];

	protected $fillable = [
		'descripcion',
		'presidente',
		'coordinador',
		'mapa',
		'direccion',
		'telefono',
		'redes'
	];
}
