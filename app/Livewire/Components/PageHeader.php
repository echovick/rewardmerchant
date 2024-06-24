<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PageHeader extends Component
{
    public $subHeader;
    public $header;
    public $snippet;

    public function mount($subHeader, $header, $snippet)
    {
        $this->subHeader = $subHeader;
        $this->header = $header;
        $this->snippet = $snippet;
    }

    public function render()
    {
        return view('livewire.components.page-header');
    }
}
