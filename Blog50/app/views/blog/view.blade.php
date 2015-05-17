@section('content')
	@include('blog.partials.post',array('post' => $post))

	<hr/>
	<section id='comments'>
		@foreach($post->comments as $comment)
			<div class="comment well">
				<p class="header-post">{{$comment->name}}</p>
				<blockquote class="content-post">{{$comment->content}}</blockquote>
			</div>
		@endforeach
		@foreach($post->likes as $like)
			<p> {{$like->id}}</p>
		@endforeach
	</section>
	<section>
		<h3 class="title">Add a comment</h3>
		<form action="{{URL::route('createComment',array('id' => $post->id))}}" method="POST">
		{{-- action="{{URL::route('createComment',array('id' => $post->id))}}" --}}
			<div class="form-group">
				<input name="name" class="form-control" type="text" placeholder='Your name '/>
			</div>
			<div class="form-group">
				<textarea name="content" class="form-control" placeholder="write hear"></textarea>
			</div>
			<input type="submit" class="btn btn-success"/>
		</form>
	</section>
@stop

