@section('content')
	<h3>Add a blog post</h3>
	<div class="well col-lg-6">
	<form action="{{URL::route('createPost')}}" method="POST">
		<div class="form-group">
			<input name="title" class="form-control" type="text" placeholder='title'>
		</div>
		<div class="form-group">
			<textarea name="content" class="from-control" placeholder='write-here' cols="60" rows="10"></textarea>
		</div>
		<input class="btn btn-primary"  type="submit" />
	</form>
	</div>
@stop 