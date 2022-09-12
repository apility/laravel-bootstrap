<?php

namespace Bootstrap\View\Components;

class Nav extends Component
{
    public $links;

    public function __construct($links = [])
    {
        $this->links = $links;
    }

    public function render()
    {
        return view('bootstrap::nav');
    }
}
