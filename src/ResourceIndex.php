<?php declare (strict_types=1);

namespace Dreamsbond\ResourceIndex;

/**
 * @package App
 */
class ResourceIndex implements ResourceIndexInterface
{
    /**
     * @var
     */
    private $index;

    /**
     * @inheritDoc
     */
    public function setIndex(string $index): void
    {
        $this->index = $index;
    }

    /**
     * @inheritDoc
     */
    public function getIndex(): string
    {
        return $this->index;
    }
}
