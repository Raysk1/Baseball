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
 * @property Juego $juego
 * @property Ampayer $ampayer
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

	public function juego()
	{
		return $this->belongsTo(Juego::class, 'idJuego');
	}

	public function ampayer()
	{
		return $this->belongsTo(Ampayer::class, 'idAmpayer');
	}
}
