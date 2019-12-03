<?php declare (strict_types=1);

namespace Dreamsbond\ResourceIndex;

/**
 * @package Dreamsbond\ResourceIndex
 */
interface ResourceIndexInterface
{
    /**
     * @param string $index
     */
    public function setIndex(string $index): void;

    /**
     * @return int
     */
    public function getIndex(): string;
}
