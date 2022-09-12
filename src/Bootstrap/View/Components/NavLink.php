<?php

namespace Bootstrap\View\Components;

use Bootstrap\Models\Link;

class NavLink extends Component
{
    public Link $link;

    /**
     * @param Link|mixed $link
     */
    public function __construct($link)
    {
        $this->link = Link::make($link);
    }

    public function render()
    {
        return view('bootstrap::nav-link');
    }
}
