<?php
 






 class BlogController extends BaseController
 {
 	protected $layout = 'layouts.master';
 	public function index(){
 	$this->layout->content = View::make('blog.index' , array(
            'posts' => Post::all()));
    }

    public function newPost(){
      	$this->layout->content = View::make('blog.new');
    }

    public function createPost(){
    	$post = new Post();
    	$post->title = Input::get('title');
    	$post->content = nl2br(Input::get('content'));
    	$post->save();

    	return Redirect::route('viewPost',array('id' => $post->id));
    }

    public function viewPost($id){
    	$post = Post::findOrFail($id);
        $post->title = htmlspecialchars(trim($post->title));
        $post->content = stripcslashes(trim($post->content));
		$this->layout->content = View::make('blog.view' ,array(
		 'post' =>$post 
		));
    }
    public function createComment($id){
        $post = Post::findOrFail($id);
        $comment = new Comment();
        $comment->name = Input::get('name');
        $comment->content = nl2br(Input::get('content'));
        $post->comments()->save($comment);
        return Redirect::route('viewPost' , array('id' => $post->id));
    }

}