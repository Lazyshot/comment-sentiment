<?php namespace CommentSentiment;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	//
	public function post() {
		return $this->belongsTo('CommentSentiment\Post');
	}

}
