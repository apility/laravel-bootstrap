<?php

namespace Bootstrap\Concerns;

use Throwable;

trait ParsesProperties
{
    protected function parseProperty(string $property, $data)
    {
        $value = null;

        try {
            $value = $value ?? $data->{$property};
        } catch (Throwable $e) {
            //
        }

        try {
            $value = $value ?? $data[$property];
        } catch (Throwable $e) {
            //
        }

        $value = $value ?? data_get($data, $property, $value);

        if (!$value && is_object($data)) {
            try {
                if (method_exists($data, $property)) {
                    $value = $data->{$property}();
                }

                if (!$value && method_exists($data, 'get' . ucfirst($property) . 'Attribute')) {
                    $value = $data->{'get' . ucfirst($property) . 'Attribute'}();
                }
            } catch (Throwable $e) {
                //
            }
        }

        return $value;
    }
}
