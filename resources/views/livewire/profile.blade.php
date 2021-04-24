<div>
<div>
<div class="container bg-dark text-white mt-2"  style="width:35%;">
  <div class="row">
    <div class="col-md-10 mx-5 my-3">
    <h2>User Profile</h2>
  <form wire:submit.prevent="UpdateProfile({{Auth::user()->id}})">
  @if(Session::has('message'))
				<div class="alert alert-success"><button class="close" data-dismiss="alert" title="Close">&times;</button>
					<p>{{session::get('message')}}</p>
				</div>
	@endif
  <div class="form-group">
      <label for="name">Name:</label>
      <input value="{{Auth::user()->name}}" type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
     @error('name') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input value="{{Auth::user()->email}}" type="text" class="form-control" id="email" placeholder="Enter email" wire:model="email">
      @error('email') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <button type="submit" class="btn btn-success btn-block mt-3">Update</button>
  </form>
    </div>
  </div>
</div>
</div>

</div>
