<?php 

	/**
	* 
	*/
	class Post extends Eloquent{
		public function comments(){
			return $this->hasmany('Comment');
		}
		public function likes(){
			return $this->hasmany('Like');
		}
	}