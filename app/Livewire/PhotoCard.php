<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class PhotoCard extends Component
{

    public $images = [];

    public function mount()
    {
        $this->loadImages();
    }

    private function loadImages()
    {
        $this->images = Image::all();


    }

    public function render()
    {
        return view('livewire.photo-card');
    }
}
