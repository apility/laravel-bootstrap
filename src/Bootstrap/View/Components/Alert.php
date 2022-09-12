<?php

namespace Bootstrap\View\Components;

class Alert extends Component
{
    public $color;
    public $dismissible;
    public $fade;
    public $show;

    public function __construct($color = 'primary', $dismissible = false, $fade = true, $show = true)
    {
        parent::__construct();
        $this->color = $color;
        $this->dismissible = $dismissible;
        $this->fade = $fade;
        $this->show = $show;
    }

    public function render()
    {
        return view('bootstrap::alert');
    }
}
