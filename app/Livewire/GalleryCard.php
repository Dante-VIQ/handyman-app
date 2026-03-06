<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Image;

class GalleryCard extends Component
{
    public $Images = [];
    public $photos = [];

    public function mount()
    {
        $this->loadImages();
    }

    private function loadImages()
    {
        $this->Images = Image::latest()->take(5)->get();
        
        $this->photos = Image::latest()->take(5)->get();

    }

    public function render()
    {
        return view('livewire.gallery-card');
    }
}