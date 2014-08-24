<?php

namespace Bahjaat\Pack\Models;
// use Bahjaat\Pack\Models\CommentModel as Comment;

class PostModel extends \Eloquent {
	protected $fillable = [];
	protected $table = 'posts';

	public function comments()
	{
		return $this->hasMany('Bahjaat\Pack\Models\CommentModel','post_id');
	}
}