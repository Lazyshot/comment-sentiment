<?php namespace CommentSentiment;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	//
	public function posts() {
		return $this->hasMany('CommentSentiment\Post');
	}

}
