<?php

namespace App\Models;

use App\Enums\LineService\ServiceType;
use App\Enums\LineService\TargetType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineService extends Model
{
//    use HasFactory;
    protected $table = 'line_services';

    protected $fillable = [
        'name',
        'code',
        'description',
        'service_type',
        'target_type',
        'group_name',
        'group_invite_url',
        'client_id',
        'token',
    ];

    protected $casts = [
        'service_type' => ServiceType::class,
        'target_type'  => TargetType::class,
    ];
}

