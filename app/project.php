<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = ['title','description','owner_id'];


    public function path()
    {
        return "/Projects/{$this->id}";
    }
    public function owner()
    {
        return $this->belongsTo(User::class,'owner_id','id');
    }
}
