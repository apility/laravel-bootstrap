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

        $this->href = $this->parseProperty('href', $data) ?? $this->parseProperty('url', $data) ?? '#';
        $this->title = $this->parseProperty('title', $data);
        $this->target = $this->parseProperty('target', $data) ?? '_self';
        $this->active = (bool) ($this->parseProperty('active', $data) ?? false);
        $this->disabled = (bool) ($this->parseProperty('disabled', $data) ?? false);
        $this->children = collect($this->parseProperty('children', $data) ?? []);
        $this->alt = $this->parseProperty('alt', $data);

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
