<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $type
 */
class Attribute extends Model
{
    use HasFactory;
    protected $table = 'attributes';
    protected $guarded = [];
}
