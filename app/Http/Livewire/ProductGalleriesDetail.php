<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Project;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductGalleriesDetail extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public Product $product;
    public Gallery $gallery;
    public $postsForSelect = [];
    public $projectsForSelect = [];

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Gallery';

    protected $rules = [
        'gallery.post_id' => ['nullable', 'exists:posts,id'],
        'gallery.project_id' => ['nullable', 'exists:projects,id'],
        'gallery.name' => ['required', 'string'],
        'gallery.description' => ['nullable', 'string'],
        'gallery.status' => ['required', 'boolean'],
    ];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->postsForSelect = Post::pluck('title', 'id');
        $this->projectsForSelect = Project::pluck('title', 'id');
        $this->resetGalleryData();
    }

    public function resetGalleryData()
    {
        $this->gallery = new Gallery();

        $this->gallery->post_id = null;
        $this->gallery->project_id = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newGallery()
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.product_galleries.new_title');
        $this->resetGalleryData();

        $this->showModal();
    }

    public function editGallery(Gallery $gallery)
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.product_galleries.edit_title');
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

        if (!$this->gallery->product_id) {
            $this->authorize('create', Gallery::class);

            $this->gallery->product_id = $this->product->id;
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

        foreach ($this->product->galleries as $gallery) {
            array_push($this->selected, $gallery->id);
        }
    }

    public function render()
    {
        return view('livewire.product-galleries-detail', [
            'galleries' => $this->product->galleries()->paginate(20),
        ]);
    }
}
