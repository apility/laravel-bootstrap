<?php

namespace Bootstrap\View\Components;

use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    public $prefix;

    public function __construct()
    {
        $this->prefix = 'bs5:' . md5(uniqid());
    }

    public function render()
    {
        return view('bootstrap::navbar');
    }
}
