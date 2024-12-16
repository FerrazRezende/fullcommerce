<?php

namespace App\Enum;

enum UserTypes: string
{
    case ADMIN = 'ADMIN';
    case EMPLOYEE = 'EMPLOYEE';
    case SELLER = 'SELLER';
    case CUSTOMER = 'CUSTOMER';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
