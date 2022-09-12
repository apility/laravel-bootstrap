<?php

namespace Bootstrap\View\Components;

use Bootstrap\Models\Image;
use Bootstrap\Models\Link;

class Card extends Component
{
    public $image;
    public $title;
    public $link;
    public $width;
    public $header;

    public function __construct($title = null, $image = null, $link = null, $width = '18rem', $header = null)
    {
        $this->title = $title;
        $this->image = Image::make($image);
        $this->link = Link::make($link);
        $this->width = $width;
        $this->header = $header;
    }

    public function render()
    {
        return view('bootstrap::card');
    }
}
