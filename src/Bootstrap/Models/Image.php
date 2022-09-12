<?php

namespace Bootstrap\Models;

use Bootstrap\Concerns\ParsesProperties;

final class Image
{
    use ParsesProperties;

    public $src;
    public $title;
    public $alt;

    private function __construct($data)
    {
        if (is_string($data)) {
            $data = ['src' => $data];
        }

        $this->parseProperties(['src', 'title', 'alt'], $data);
    }

    public static function make($data): ?Image
    {
        if ($data) {
            if ($data instanceof Image) {
                return $data;
            }

            return new static($data);
        }

        return null;
    }
}
