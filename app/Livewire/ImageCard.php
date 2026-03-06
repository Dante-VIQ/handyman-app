<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;

class ImageCard extends Component
{
    public $images;

    public function mount(Image $image)
    {
        $this->images = $image->all();
    }
    public function render()
    {
        return view('livewire.image-card');
    }
}
