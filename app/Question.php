<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['title','slug','body'];

    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value){

    	//return $this->attributes('title') = $value;
    	//return $this->attributes('slug') = str_slug($value);
    }
}
