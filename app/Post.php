<?php namespace CommentSentiment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	//
	public function page() {
		return $this->belongsTo('CommentSentiment\Page');
	}

	public function comments() {
		return $this->hasMany('CommentSentiment\Comment');
	}

}
