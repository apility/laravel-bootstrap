<?php

namespace Bootstrap\Models;

use Illuminate\Support\Collection;

final class Link
{
    /** @var string|null */
    public $href;

    /** @var string|null */
    public $title;

    /** @var string|null */
    public $target;

    /** @var bool */
    public $active;

    /** @var bool */
    public $disabled;

    /** @var Collection */
    public $children = [];

    private function __construct($data)
    {
        $this->href = data_get($data, 'url', '#');
        $this->title = data_get($data, 'title', '');
        $this->target = data_get($data, 'target', '_self');
        $this->active = (bool) data_get($data, 'active', false);
        $this->disabled = (bool) data_get($data, 'disabled', false);
        $this->children = collect(data_get($data, 'children', []));

        if ($this->disabled) {
            $this->active = false;
            $this->href = '#';
        }
    }

    public static function make($data): Link
    {
        if ($data instanceof Link) {
            return $data;
        }

        return new static($data);
    }
}
