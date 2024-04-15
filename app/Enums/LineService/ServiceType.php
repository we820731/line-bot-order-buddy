<?php

namespace App\Enums\LineService;

use App\Enums\Traits;

enum ServiceType: int
{
    use Traits;

    # 1: 點餐訂單 2:通知
    case ORDER = 1;
    case NOTIFICATION = 2;

    public function description(): string
    {
        return match ($this) {
            self::ORDER => __('line_service.service_type.order'),
            self::NOTIFICATION => __('line_service.service_type.notification'),
        };
    }
}

