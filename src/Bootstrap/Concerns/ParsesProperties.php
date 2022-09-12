<?php

namespace Bootstrap\Concerns;

use Throwable;

trait ParsesProperties
{
    /**
     * Safely parse properties from arrays, objects or Model instances.
     */
    protected function parseProperties(array $properties, $data)
    {
        if (is_null($data)) {
            return;
        }

        foreach ($properties as $property => $type) {
            if (is_numeric($property)) {
                $property = $type;
                $type = 'string';
            }

            if (!is_string($property)) {
                continue;
            }

            try {
                $value = $this->parseProperty($property, $data);
            } catch (Throwable $e) {
                $value = null;
            }

            switch ($type) {
                case 'bool':
                    $value = (bool) $value;
                    break;
                case 'collection':
                    $value = collect($value);
                    break;
                default:
                    break;
            }

            $this->{$property} = $value;
        }
    }

    private function parseProperty(string $property, $data)
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
