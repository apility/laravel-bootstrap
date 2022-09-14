<?php

namespace Bootstrap\Concerns;

use Throwable;

trait ParsesProperties
{
    protected function parseProperty(string $property, $data)
    {
        $value = data_get($data, $property, null);

        if (!$value && is_object($data)) {
            if (method_exists($data, $property)) {
                $value = $data->{$property}();
            }

            if (!$value && method_exists($data, 'get' . ucfirst($property) . 'Attribute')) {
                $value = $data->{'get' . ucfirst($property) . 'Attribute'}();
            }
        }

        return $value;
    }
}
