<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $image = '/images/';
    protected $fillable = ['path'];

    public function getPathAttribute($val) {
        return $this->image . $val;
    }
}
