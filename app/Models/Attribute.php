<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/*
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $type
 */
class Attribute extends BaseModel
{
    use HasFactory, SoftDeletes, LogsActivity;
    protected $table = 'attributes';
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
        'options' => 'array',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        //@TODO: Translation
        return LogOptions::defaults()
            ->logOnly(['name', 'type', 'options'])
            ->setDescriptionForEvent(fn (string $eventName) => "This model has been {$eventName}")
            ->useLogName('Attribute');
    }
}
