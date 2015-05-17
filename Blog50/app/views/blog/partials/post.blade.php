<article class='content-post'>
		<header class='header-post' >
			<h1>{{ stripcslashes(htmlspecialchars($post->title))}}</h1>
		</header><!-- /header -->
		<div class="content-post">
			{{stripcslashes(htmlspecialchars($post->content))}}
		</div>
		<footer class='time-footer'>
		   <p>Posted : {{$post->created_at->diffForHumans()}}</p>	
		</footer>
		
		{{-- <div class="well comment">
		<div class="header-post">
			{{stripcslashes(htmlspecialchars($comment->name))}}
		</div> 
		<div class="content-post">
			{{stripcslashes(htmlspecialchars($comment->content))}}
		</div> 
		</div> --}}
</article>