<?php

namespace Bootstrap\View\Components;

use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
    protected $componentId;

    public function prefix($name)
    {
        $this->componentId = $this->componentId ?? md5(uniqid());
        $prefix = config('bootstrap.prefix', 'bs');

        return $prefix . '-' . $this->componentId . '-' . $name;
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
