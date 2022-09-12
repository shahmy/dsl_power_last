<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use App\Models\Gallery;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GalleryVideosDetail extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public Gallery $gallery;
    public Video $video;

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Video';

    protected $rules = [
        'video.video_url' => ['required', 'max:255', 'string'],
        'video.status' => ['nullable', 'boolean'],
    ];

    public function mount(Gallery $gallery)
    {
        $this->gallery = $gallery;
        $this->resetVideoData();
    }

    public function resetVideoData()
    {
        $this->video = new Video();

        $this->dispatchBrowserEvent('refresh');
    }

    public function newVideo()
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.gallery_videos.new_title');
        $this->resetVideoData();

        $this->showModal();
    }

    public function editVideo(Video $video)
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.gallery_videos.edit_title');
        $this->video = $video;

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

        if (!$this->video->gallery_id) {
            $this->authorize('create', Video::class);

            $this->video->gallery_id = $this->gallery->id;
        } else {
            $this->authorize('update', $this->video);
        }

        $this->video->save();

        $this->hideModal();
    }

    public function destroySelected()
    {
        $this->authorize('delete-any', Video::class);

        Video::whereIn('id', $this->selected)->delete();

        $this->selected = [];
        $this->allSelected = false;

        $this->resetVideoData();
    }

    public function toggleFullSelection()
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->gallery->videos as $video) {
            array_push($this->selected, $video->id);
        }
    }

    public function render()
    {
        return view('livewire.gallery-videos-detail', [
            'videos' => $this->gallery->videos()->paginate(20),
        ]);
    }
}
