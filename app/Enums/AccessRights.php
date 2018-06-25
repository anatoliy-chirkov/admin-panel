<?php

namespace App\Enums;

class AccessRights
{
    public const
        USER_ACCESS_RIGHT = null,
        ADMIN_ACCESS_RIGHT = 1
    ;

    public const NAMES = [
        self::USER_ACCESS_RIGHT => 'User',
        self::ADMIN_ACCESS_RIGHT => 'Admin'
    ];
}
