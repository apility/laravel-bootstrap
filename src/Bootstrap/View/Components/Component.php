<?php

namespace Bootstrap\View\Components;

use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    public $prefix;

    public function __construct()
    {
        $this->prefix = config('bootstrap.prefix', 'bs') . ':' . md5(uniqid());
    }

    public function render()
    {
        return view('bootstrap::navbar');
    }

    public function resolveComponent($name): string
    {
        return $this->prefix . '-' . $name;
    }
}
