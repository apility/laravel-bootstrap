<?php

namespace Bootstrap\View\Components;

use Bootstrap\Models\Link;

class Button extends Component
{
    public $variant;
    public $type;
    public $href;
    public $tag;
    public $outline;
    public $large;
    public $small;
    public $disabled;
    public $label;
    public $link;

    public function __construct($variant = 'primary', $type = null, $href = null, $outline = false, $large = false, $small = false, $disabled = false, $label = null, $link = null)
    {
        $this->link = Link::make($link);
        $this->variant = $variant;
        $this->type = $type;
        $this->href = $this->link ? $this->link->href : $href;
        $this->outline = $outline;
        $this->large = $large;
        $this->small = $small;
        $this->disabled = $this->link ? $this->link->disabled : $disabled;
        $this->label = $this->link ? $this->link->title : $label;
        $this->tag = $href ? 'a' : 'button';
    }

    public function render()
    {
        return view('bootstrap::button');
    }
}
