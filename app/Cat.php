<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = ['name'];
    protected $guarded = ['id'];
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
