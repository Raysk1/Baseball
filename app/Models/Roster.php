<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Roster
 * 
 * @property int $idRoster
 * @property int $idEquipo
 * @property int $idTemporada
 * @property int $idAfiliacion
 *
 * @package App\Models
 */
class Roster extends Model
{
	protected $table = 'rosters';
	protected $primaryKey = 'idRoster';
	public $timestamps = false;

	protected $casts = [
		'idEquipo' => 'int',
		'idTemporada' => 'int',
		'idAfiliacion' => 'int'
	];

	protected $fillable = [
		'idEquipo',
		'idTemporada',
		'idAfiliacion'
	];
}
