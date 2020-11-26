<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/statictagcloud.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Statictagcloud\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Represents one tag
 */
class Tag extends AbstractEntity
{
    /**
     * @var string
     */
    protected $tag = '';

    /**
     * @var string
     */
    protected $link = '';

    /**
     * @var int
     */
    protected $priority = 0;

    /**
     * @var int
     */
    protected $sorting = 0;

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): Tag
    {
        $this->tag = $tag;
        return $this;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): Tag
    {
        $this->link = $link;
        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): Tag
    {
        $this->priority = $priority;
        return $this;
    }

    public function getSorting(): int
    {
        return $this->sorting;
    }

    public function setSorting(int $sorting): Tag
    {
        $this->sorting = $sorting;
        return $this;
    }
}
