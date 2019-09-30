@foreach($posts as $post)
<hr>
<br>

	<div class="panel panel-default">
		<div class="panel-body">
			<p><b>{{ $post->name }}</b> added a post.</p>
			<a href="/forum/{{$post->slug}}" class="text-secondary">
				{{ date('M d, Y h:i A', strtotime($post->created_at)) }}
			</a>
			<div class="row">
				<div class="col-md-2">
				<img width="150px" src="{{ url('/data_file/'.$post->getFile()) }}">
				</div>
				<div class="col-md 6">
				<h3 style="padding-top:10px; padding-bottom:10px;">{{ $post->caption }}</h3>
				<a href="data_file/{{$post->file}}" download="" style="padding-top:50px; padding-bottom:30px;" class="text-primary">{{$post->file}}</a>
				</div>
				</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-md-2">
					<button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-up"></i> <span>Like</span></button>
				</div>
				<div class="col-md-10" style="margin-left:-40px;">
					<button type="button" class="btn btn-primary btn-sm comment" value="{{ $post->postid }}"><i class="fa fa-comments"></i> {{$post->comment()->count()}} Comment</button>
				</div>
			</div>
		</div>
	</div>
	<div id="commentField_{{ $post->postid }}" class="panel panel-default" style="padding:10px; margin-top:-20px; display:none;">
		<div id="comment_{{ $post->postid }}">
		</div>
		<form id="commentForm_{{ $post->postid }}">
			<input type="hidden" value="{{ $post->postid }}" name="postid">
			<br>
			<div class="row"> 
				<div class="col-md-7">
					<input type="text" name="commenttext" id="commenttext" data-id="{{ $post->postid }}" class="form-control commenttext" placeholder="Write a Comment...">
				</div>
				<div class="col-md-2" style="margin-left:-25px;">
					<button type="button" class="btn btn-primary submitComment" value="{{ $post->postid }}"><i class="fa fa-comment"></i> Submit</button>
				</div>
			</div>
			
		</form>
	</div>

@endforeach