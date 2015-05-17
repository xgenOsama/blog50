<?php 
	/**
	* 
	*/
	class Like extends Eloquent
	{
		public function post(){
 		return $this->belongsTo('Post');
 	}
 		public function comment(){
 		return $this->belongsTo('Comment');	
 	}
	}