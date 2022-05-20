<?php

namespace TwinElements\SortableBundle\Entity;

interface PositionInterface
{
    /**
     * @return int|null
     */
    public function getPosition(): ?int;

    /**
     * @param int|null $position
     */
    public function setPosition(?int $position): void;
}
