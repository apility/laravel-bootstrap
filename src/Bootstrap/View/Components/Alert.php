<?php

namespace Bootstrap\View\Components;

class Alert extends Component
{
    public $variant;
    public $dismissible;
    public $fade;
    public $show;

    public function __construct($variant = 'primary', $dismissible = false, $fade = true, $show = true)
    {
        $this->variant = $variant;
        $this->dismissible = $dismissible;
        $this->fade = $fade;
        $this->show = $show;
    }

    public function render()
    {
        return view('bootstrap::alert');
    }
}
