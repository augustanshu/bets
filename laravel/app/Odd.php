<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odd extends Model
{
     protected $table="odds";
	 
	 public function match()
	 {
		 return $this->hasOne('App\Match','mid','mid');
	 }
}
