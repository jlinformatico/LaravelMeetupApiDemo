<?php

class Post extends \Eloquent {



	public function comments() {
		return $this->hasMany('Comment');
	}

	public function author()
	{
		return $this->belongsTo('Author');
	}

}