<div class="container mt-4" style="margin-left: 400px">
	<div class="row">
		<div class="col-md-6">
		
			@if(Session::has('message'))
				<div class="alert alert-success"><button class="close" data-dismiss="alert" title="Close">&times;</button>
					<p>{{session::get('message')}}</p>
				</div>
			@endif
			<textarea rows="3" cols="57.5" wire:model="newComments" placeholder="Please write something..."></textarea><br>
			@error('newComments') <span class="text-danger">{{$message}}</span> @enderror
			<input type="file" class="form-control mt-3 mb-3" wire:model="photo">
			@error('photo') <span class="text-danger">{{$message}}</span> @enderror
			@if($photo)
				Preview Image : 
				<img src="{{$photo->temporaryUrl()}}" alt="preview_image" height="250" width="540">
			@endif
			<button wire:click="addComment" class="btn btn-danger btn-block mt-2">Add Comment</button>
	
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-6">
			<div class="card">
				@foreach($all_post as $comment)
				<div class="card-body">
					<h5>{{$comment->author}} <span class="text-muted" style="float: right; font-size: 12px"> {{ $comment->created_at->diffForHumans()}}</span><br><button wire:click="deleteComment({{$comment->id}})" class="close" style="float:right; color:red">x</button></h5>
					<img src="{{$comment->photos}}" alt="commenter_img" height="100" width="150">
					<p>{{$comment->body}}</p><button wire:click="download({{$comment->id}})" class="btn btn-danger btn-sm">Download</button>
				</div>
				
				@endforeach
				<div align="center" class="bg-secondary">{{$all_post->links()}}</div>
			</div>
		</div>

	</div>		
</div>