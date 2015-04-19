<?php namespace CommentSentiment;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {
	protected $fillable = ['id', 'name', 'picture', 'likes'];

	//
	public function posts() {
		return $this->hasMany('CommentSentiment\Post');
	}

}
