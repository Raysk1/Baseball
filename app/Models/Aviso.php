<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aviso
 * 
 * @property int $idAvisos
 * @property string|null $aviso
 *
 * @package App\Models
 */
class Aviso extends Model
{
	protected $table = 'avisos';
	protected $primaryKey = 'idAvisos';
	public $timestamps = false;

	protected $fillable = [
		'aviso'
	];
}
