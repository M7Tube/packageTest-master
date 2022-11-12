<?php

namespace App\Http\Traits;

trait PermissionsTrait
{
    public function getPermissions()
    {
        return [
            'homepage:read',
            'logout',
        ];
    }
}
