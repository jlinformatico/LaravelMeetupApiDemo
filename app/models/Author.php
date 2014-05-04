<?php

class Author extends \Eloquent {
	protected $fillable = [];

	


	public function posts()
	{
		return $this->hasMany('Post');
	}
}