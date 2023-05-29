<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Bateadore
 * 
 * @property int $idBateadores
 * @property int $idJuego
 * @property int $idAfiliacion
 * @property int|null $AB
 * @property int|null $C
 * @property int|null $H
 * @property int|null $CP
 * @property int|null $BB
 * @property int|null $K
 * @property float|null $PJE
 * @property float|null $OBP
 * 
 * @property Jugador $jugador
 * @property Juego $juego
 *
 * @package App\Models
 */
class Bateador extends Model
{
	protected $table = 'bateadores';
	protected $primaryKey = 'idBateadores';
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

	public function jugador()
	{
		return $this->belongsTo(Jugador::class, 'idAfiliacion');
	}

	public function juego()
	{
		return $this->belongsTo(Juego::class, 'idJuego');
	}

	public static function obtenerBateadores($idJuego, $idEquipo) {
        return DB::table("bateadores as b")
            ->join("jugadores as ju", "b.idAfiliacion", "=", "ju.idAfiliacion")
            ->join("rosters as r", "b.idAfiliacion", "=", "r.idAfiliacion")
            ->join("equipos as e", "r.idEquipo", "=", "e.idEquipo")
            ->select(["b.*", "ju.nombre", "ju.apellidos"])
            ->where("b.idJuego", $idJuego)
            ->where("e.idEquipo", $idEquipo)
            ->get();
    }
}
