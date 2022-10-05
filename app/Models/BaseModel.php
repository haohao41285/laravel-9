<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Log;

class BaseModel extends Model
{
    use HasFactory;

    public static function boot(){

        parent::boot();

        static::creating(function($model){
            Log::info('creating');
        });

        static::updating(function($model){
            Log::info('updating');
        });

        static::created(function($model){
            Log::info('created');
        });

        static::updated(function($model){
            Log::info('updated');
        });
    }
}
