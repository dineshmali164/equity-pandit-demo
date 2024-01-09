<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
        self::updating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
