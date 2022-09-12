<?php

namespace App\Http\Livewire;

use App\Models\Photo;
use Livewire\Component;
use App\Models\Gallery;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GalleryPhotosDetail extends Component
{
    use WithPagination;
    use WithFileUploads;
    use AuthorizesRequests;

    public Gallery $gallery;
    public Photo $photo;
    public $photoImage;
    public $uploadIteration = 0;

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Photo';

    protected $rules = [
        'photoImage' => ['required', 'image', 'max:1024'],
        'photo.status' => ['nullable', 'boolean'],
    ];

    public function mount(Gallery $gallery)
    {
        $this->gallery = $gallery;
        $this->resetPhotoData();
    }

    public function resetPhotoData()
    {
        $this->photo = new Photo();

        $this->photoImage = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newPhoto()
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.gallery_photos.new_title');
        $this->resetPhotoData();

        $this->showModal();
    }

    public function editPhoto(Photo $photo)
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.gallery_photos.edit_title');
        $this->photo = $photo;

        $this->dispatchBrowserEvent('refresh');

        $this->showModal();
    }

    public function showModal()
    {
        $this->resetErrorBag();
        $this->showingModal = true;
    }

    public function hideModal()
    {
        $this->showingModal = false;
    }

    public function save()
    {
        $this->validate();

        if (!$this->photo->gallery_id) {
            $this->authorize('create', Photo::class);

            $this->photo->gallery_id = $this->gallery->id;
        } else {
            $this->authorize('update', $this->photo);
        }

        if ($this->photoImage) {
            $this->photo->image = $this->photoImage->store('public');
        }

        $this->photo->save();

        $this->uploadIteration++;

        $this->hideModal();
    }

    public function destroySelected()
    {
        $this->authorize('delete-any', Photo::class);

        collect($this->selected)->each(function (string $id) {
            $photo = Photo::findOrFail($id);

            if ($photo->image) {
                Storage::delete($photo->image);
            }

            $photo->delete();
        });

        $this->selected = [];
        $this->allSelected = false;

        $this->resetPhotoData();
    }

    public function toggleFullSelection()
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->gallery->photos as $photo) {
            array_push($this->selected, $photo->id);
        }
    }

    public function render()
    {
        return view('livewire.gallery-photos-detail', [
            'photos' => $this->gallery->photos()->paginate(20),
        ]);
    }
}
