<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // سایر کد های مدل...
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
