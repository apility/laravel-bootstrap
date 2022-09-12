<?php

namespace Bootstrap\View\Components;

use Bootstrap\Models\Image;
use Bootstrap\Models\Link;

class CardTitle extends Component
{
    public function render()
    {
        return view('bootstrap::card-title');
    }
}
