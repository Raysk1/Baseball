<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ampayersjuego
 * 
 * @property int $idCuerpo
 * @property int $idJuego
 * @property int $idAmpayer
 * @property string|null $ubicacion
 * 
 * @property Ampayer $ampayer
 * @property Juego $juego
 *
 * @package App\Models
 */
class Ampayersjuego extends Model
{
	protected $table = 'ampayersjuego';
	protected $primaryKey = 'idCuerpo';
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

	public function ampayer()
	{
		return $this->belongsTo(Ampayer::class, 'idAmpayer');
	}

	public function juego()
	{
		return $this->belongsTo(Juego::class, 'idJuego');
	}
}
