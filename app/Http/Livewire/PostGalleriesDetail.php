<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostGalleriesDetail extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public Post $post;
    public Gallery $gallery;
    public $projectsForSelect = [];
    public $productsForSelect = [];

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Gallery';

    protected $rules = [
        'gallery.project_id' => ['nullable', 'exists:projects,id'],
        'gallery.product_id' => ['nullable', 'exists:products,id'],
        'gallery.name' => ['required', 'string'],
        'gallery.description' => ['nullable', 'string'],
        'gallery.status' => ['required', 'boolean'],
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->projectsForSelect = Project::pluck('title', 'id');
        $this->productsForSelect = Product::pluck('name', 'id');
        $this->resetGalleryData();
    }

    public function resetGalleryData()
    {
        $this->gallery = new Gallery();

        $this->gallery->project_id = null;
        $this->gallery->product_id = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newGallery()
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.post_galleries.new_title');
        $this->resetGalleryData();

        $this->showModal();
    }

    public function editGallery(Gallery $gallery)
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.post_galleries.edit_title');
        $this->gallery = $gallery;

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

        if (!$this->gallery->post_id) {
            $this->authorize('create', Gallery::class);

            $this->gallery->post_id = $this->post->id;
        } else {
            $this->authorize('update', $this->gallery);
        }

        $this->gallery->save();

        $this->hideModal();
    }

    public function destroySelected()
    {
        $this->authorize('delete-any', Gallery::class);

        Gallery::whereIn('id', $this->selected)->delete();

        $this->selected = [];
        $this->allSelected = false;

        $this->resetGalleryData();
    }

    public function toggleFullSelection()
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->post->galleries as $gallery) {
            array_push($this->selected, $gallery->id);
        }
    }

    public function render()
    {
        return view('livewire.post-galleries-detail', [
            'galleries' => $this->post->galleries()->paginate(20),
        ]);
    }
}
