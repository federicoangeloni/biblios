<?php

namespace Biblios;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    public $fillable = [ 'title', 'author_id' ];

    public static $rules = [
    	'title' => 'required|min:3|max:200',
    	'author_id' => 'required'
    ];

    public function author()
    {
    	return $this->belongsTo('Biblios\Author');
    }

    public function users()
    {
    	return $this->belongsToMany('Biblios\User')->withTimestamps();
    }
}
