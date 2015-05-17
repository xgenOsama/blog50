<?php

 /**
 * 
 */
 class Comment extends Eloquent{
 	public function post(){
 		return $this->belongsTo('Post');
 	}
 	public function likes(){
			return $this->hasmany('Like');
		}
 }