<div>
<div>
<div class="container bg-dark text-light mt-2"  style="width:35%;">
  <div class="row">
    <div class="col-md-10 mx-5 my-3">
    <h2>Login Form</h2>
  <form >
  @if(Session::has('message'))
				<div class="alert alert-danger"><button class="close" data-dismiss="alert" title="Close">&times;</button>
					<p>{{session::get('message')}}</p>
				</div>
	@endif
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" wire:model="email">
      @error('email') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" wire:model="password">
      @error('password') <span class="text-danger">{{$message}}</span> @enderror
    </div>  
    <button type="button" wire:click="Login" class="btn btn-success btn-block mb-4">Login</button>
  </form>
    </div>
  </div>
</div>
</div>

</div>
