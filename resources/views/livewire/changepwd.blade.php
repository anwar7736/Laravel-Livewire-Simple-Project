<div>
<div>
<div>
<div class="container bg-dark text-white mt-2"  style="width:35%;">
  <div class="row">
    <div class="col-md-10 mx-5 my-3">
    <h2>Change Password</h2>
  <form wire:submit.prevent="ChangePwd({{Auth::user()->id}})">
  @if(Session::has('message'))
				<div class="alert alert-danger"><button class="close" data-dismiss="alert" title="Close">&times;</button>
					<p>{{session::get('message')}}</p>
				</div>
	@endif
    <div class="form-group">
      <label for="email">Old Password:</label>
      <input type="password" class="form-control" id="email" placeholder="Enter old password" wire:model="oldpass">
      @error('oldpass') <span class="text-danger">{{$message}}</span> @enderror
    </div>
    <div class="form-group">
      <label for="pwd">New Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter new password" wire:model="newpass">
      @error('newpass') <span class="text-danger">{{$message}}</span> @enderror
    </div>  
    <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter confirm password" wire:model="cpass">
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3">Update</button>
  </form>
    </div>
  </div>
</div>
</div>

</div>

</div>
