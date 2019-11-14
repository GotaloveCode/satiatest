<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'url','user_id'
    ];
    //
    public function user(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
