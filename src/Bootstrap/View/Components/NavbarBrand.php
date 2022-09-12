<?php

namespace Bootstrap\View\Components;

use Bootstrap\Models\Link;

class NavbarBrand extends Component
{
    public Link $link;

    public function __construct($href = '/')
    {
        parent::__construct();
        $this->link = Link::make(['href' => $href]);
    }

    public function render()
    {
        return view('bootstrap::navbar-brand');
    }
}
