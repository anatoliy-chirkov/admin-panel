<?php

namespace App;

use App\Enums\AccessRights;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'access_rights',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'access_rights',
    ];

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->access_rights === AccessRights::ADMIN_ACCESS_RIGHT;
    }
}
