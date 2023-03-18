<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    protected static function boot()
    {
        static::creating(function ($model) {
            $model->company_id = auth()->user()->company_id;
        });
        static::updating(function ($model) {
            $model->company_id = auth()->user()->company_id;
        });
        parent::boot();
    }
}
