<?php

namespace App\Enums\LineService;

use App\Enums\Traits;

enum TargetType: int
{
    use Traits;

    # 1: 群組 2: 個人
    case GROUP = 1;
    case USER = 2;

    public function description(): string
    {
        return match ($this) {
            self::GROUP => __('line_service.target_type.group'),
            self::USER => __('line_service.target_type.user'),
        };
    }
}

