<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Jugador
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $email
 * @property string|null $password
 
 *
 * @package App\Models
 */
class Users extends Model
{
    use HasFactory;
}
