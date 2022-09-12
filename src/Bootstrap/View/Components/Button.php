<?php

namespace Bootstrap\View\Components;

class Button extends Component
{
    public $color;
    public $type;
    public $href;
    public $tag;
    public $outline;
    public $large;
    public $small;
    public $disabled;

    public function __construct($color = 'primary', $type = null, $href = null, $outline = false, $large = false, $small = false, $disabled = false)
    {
        parent::__construct();
        $this->color = $color;
        $this->type = $type;
        $this->tag = $href ? 'a' : 'button';
        $this->href = $href;
        $this->outline = $outline;
        $this->large = $large;
        $this->small = $small;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('bootstrap::button');
    }
}
