<?php

namespace Bootstrap\View\Components;

use Bootstrap\Concerns\ParsesProperties;
use Bootstrap\Models\Image;
use Bootstrap\Models\Link;

class CardImage extends Component
{
    use ParsesProperties;

    public $src;
    public $title;
    public $alt;
    public $placement;

    public function __construct($src = null, $image = null, $placement = 'top')
    {
        $this->placement = $placement;

        if (is_string($src)) {
            $image = ['src' => $src];
        }

        if (is_string($image)) {
            $image = ['src' => $image];
        }

        $image = Image::make($image);

        $this->src = $this->parseProperty('src', $image);
        $this->title = $this->parseProperty('title', $image);
        $this->alt = $this->parseProperty('alt', $image);
    }

    public function render()
    {
        return view('bootstrap::card-image');
    }
}
