<?php

namespace App;

enum ArticleStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case PENDING = 'pending';

    public static function values(): array {
            return array_column(self::cases(), 'value');
    }
}
