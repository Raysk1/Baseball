<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Temporada
 * 
 * @property int $idTemporada
 * @property string|null $nombre
 * @property int $idLiga
 * @property string|null $grupo
 * @property string|null $categoria
 * @property string|null $momento
 * @property string|null $temporada
 * 
 * @property Liga $liga
 * @property Collection|Juego[] $juegos
 * @property Collection|Roster[] $rosters
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
		'nombre',
		'idLiga',
		'grupo',
		'categoria',
		'momento',
		'temporada'
	];

	public function liga()
	{
		return $this->belongsTo(Liga::class, 'idLiga');
	}

	public function juegos()
	{
		return $this->hasMany(Juego::class, 'idTemporada');
	}

	public function rosters()
	{
		return $this->hasMany(Roster::class, 'idTemporada');
	}
}
