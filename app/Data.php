<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['id', 'key', 'value'];

    // public function getValueAttribute()
    // {
    //     return decrypt("{$this->key}|{$this->value}");
    // }
    //
    // public function setValueAttribute($value)
    // {
    //     $this->attributes['value'] = strtolower($value);
    // }
}
