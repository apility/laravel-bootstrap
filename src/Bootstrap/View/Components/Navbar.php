<?php

namespace Bootstrap\View\Components;

use Bootstrap\Models\Link;

class Navbar extends Component
{
    /** @var Link[] */
    public $links;

    public $bg;
    public $dark;
    public $light;

    public function __construct($links = [], $dark = false, $light = false, $bg = 'primary')
    {
        parent::__construct();
        $this->links = $links;
        $this->bg = $bg;
        $this->dark = $dark;
        $this->light = $light;
    }

    public function render()
    {
        return view('bootstrap::navbar');
    }
}
