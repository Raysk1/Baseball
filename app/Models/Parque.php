<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Parque
 * 
 * @property int $idCampo
 * @property string|null $descripcion
 * 
 * @property Collection|Juego[] $juegos
 *
 * @package App\Models
 */
class Parque extends Model
{
	protected $table = 'parques';
	protected $primaryKey = 'idCampo';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];

	public function juegos()
	{
		return $this->hasMany(Juego::class, 'idCampo');
	}
}
