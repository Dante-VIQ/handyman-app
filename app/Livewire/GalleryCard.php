<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Image;

class GalleryCard extends Component
{
    public $images = [];
    public $photos = [];

    public function mount()
    {
        $this->loadImages();
    }

    private function loadImages()
    {
        $this->images = Image::latest()->take(2)->get();
        
        $this->photos = Image::latest()->take(2)->get();

    }

    public function render()
    {
        return view('livewire.gallery-card');
    }
}