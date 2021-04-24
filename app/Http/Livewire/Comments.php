<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use Carbon\Carbon;
use App\Models\Comment;
use Storage;
class Comments extends Component
{
	use WithFileUploads;
	
	use WithPagination;

	public $newComments;

	public $comments;
	public $photo;
	
	public function resetInput()
	{
		$this->newComments='';
		$this->photo='';
	}
	public function updated($field)
    {
        $this->validateOnly($field, [
            'newComments' => 'required|max:255',
            'photo' => 'required|image|max:1024',
        ]);
    }

	public function addComment()
	{	
		$this->validate([
			'newComments' => 'required|max:255',
			'photo' => 'required|image|max:1024',
        ]);
			$image = $this->photo->hashName();
			$this->photo->store('public');
			$new_comment= new Comment(); 
			$new_comment->author  =  'Md Anwar Hossain';
			$new_comment->body  = $this->newComments;
			$new_comment->photos  =$image;
			$new_comment->save();
			$this->resetInput();
			session()->flash('message', 'New Comment inserted successfully');
		
	}
	public function deleteComment($commentId)
	{
			$data = Comment::find($commentId);
			$data->delete();
			$img = $data->photos;
			$image = explode('/', $img)[1];
			Storage::disk('public')->delete($image);
			session()->flash('message', 'Comment deleted successfully');
	}
	
	public function download($id)
	{
		$photo = Comment::find($id);
		$img = $photo->photos;
		$image = explode('/', $img)[1];
		return Storage::disk('public')->download($image, rand(1111111111,9999999999).'_livewire');
	}
    public function render()
    {
		$all_post = Comment::latest()->simplePaginate(2);
        return view('livewire.comments', compact('all_post'));
    }
}
