<?php

namespace Bahjaat\Pack\Models;
use Bahjaat\Pack\Models\PostModel as Post;

class CommentModel extends \Eloquent {
	protected $fillable = [];
	protected $table = 'comments';

	public function posts()
	{
		return $this->belongsTo('Post');
	}
}