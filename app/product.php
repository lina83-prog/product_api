<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class product extends Model
{
    protected $fillable = [
        'product_name', 'description', 
    ];

    public function users(){
    	return $this->belongsToMany('App\User');
    }
}
