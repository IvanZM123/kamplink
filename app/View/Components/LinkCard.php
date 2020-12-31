<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LinkCard extends Component {
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link) {
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.link-card');
    }
}
