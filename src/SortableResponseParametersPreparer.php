<?php

namespace TwinElements\SortableBundle;

use TwinElements\Component\ResponseParameterBuilder\ResponseParameterBuilder;
use TwinElements\SortableBundle\Entity\PositionInterface;

class SortableResponseParametersPreparer
{
    public static function prepare(ResponseParameterBuilder $responseParameters, string $class)
    {
        if ((new \ReflectionClass($class))->implementsInterface(PositionInterface::class)) {
            $responseParameters->addParameter('sortable', $class);
        }
    }
}
