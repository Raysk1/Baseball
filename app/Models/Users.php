<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Turno
 * 
 * 
 * @property string|null $name
 * @property string|null $email
 * 
 * @property string|null $password
 *
 * @package App\Models
 */

class Users extends Model
{
    protected $table = 'Users';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;
    use HasFactory;
}
