<?php

namespace Bootstrap\Models;

use Bootstrap\Concerns\ParsesProperties;

final class Link
{
    use ParsesProperties;

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
        if (is_string($data)) {
            $data = ['url' => $data, 'title' => $data];
        }

        $this->parseProperties([
            'href',
            'title',
            'target',
            'active' => 'bool',
            'disabled' => 'bool',
            'collection' => 'children'
        ], $data);

        if ($this->disabled) {
            $this->active = false;
            $this->href = '#';
        }
    }

    public static function make($data): ?Link
    {
        if ($data) {
            if ($data instanceof Link) {
                return $data;
            }

            return new static($data);
        }

        return null;
    }
}
