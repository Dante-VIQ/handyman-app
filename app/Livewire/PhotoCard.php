<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class PhotoCard extends Component
{

    public $Images = [];

    public function mount()
    {
        $this->loadImages();
    }

    private function loadImages()
    {
        $this->Images = Image::all();
        

    }

    public function render()
    {
        return view('livewire.photo-card');
    }
}
