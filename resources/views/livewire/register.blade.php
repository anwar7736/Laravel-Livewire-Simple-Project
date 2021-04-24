<div>
<div>
<div class="container bg-dark text-white mt-2"  style="width:35%;">
  <div class="row">
    <div class="col-md-10 mx-5 my-3">
    <h2>Registration Form</h2>
  <form>
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
     @error('name') <span class="text-danger">{{$message}}</span> @enderror
    </div>
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
    <div class="form-group">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter confirm password" wire:model="password_confirm">
    </div>
    <button type="button" wire:click="Registration" class="btn btn-danger btn-block mt-3">Register</button>
  </form>
    </div>
  </div>
</div>
</div>

</div>
