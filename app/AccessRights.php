<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessRights extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->name === 'admin';
    }
}
