<?php

namespace Biblios;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
	public $fillable = [ 'firstname', 'lastname' ];

    public static $rules = [
    	'firstname' => 'required|min:3|max:40',
    	'lastname' => 'required|min:3|max:40'
    ];	

    public function books()
    {
    	return $this->hasMany('Biblios\Book');
    }
   
}
