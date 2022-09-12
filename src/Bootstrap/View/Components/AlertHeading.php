<?php

namespace Bootstrap\View\Components;

class AlertHeading extends Component
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        return view('bootstrap::alert-heading');
    }
}
