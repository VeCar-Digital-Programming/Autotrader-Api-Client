<?php

namespace Vecar\AutotraderApiClient\Api\Builders;

abstract class AbstractNameableBuilder extends AbstractBuilder
{
    protected $friendlyName;

    public function __construct(string $friendlyName, array $attributes = [])
    {
        $this->friendlyName = $friendlyName;

        parent::__construct($attributes);
    }

    public function getFriendlyName(): string
    {
        return $this->friendlyName;
    }
}
