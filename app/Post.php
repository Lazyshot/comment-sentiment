<?php namespace CommentSentiment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	protected $fillable = ['id', 'message', 'picture', 'likes'];

	//
	public function page() {
		return $this->belongsTo('CommentSentiment\Page');
	}

	public function comments() {
		return $this->hasMany('CommentSentiment\Comment');
	}

}
