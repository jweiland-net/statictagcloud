<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/statictagcloud.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Statictagcloud\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Tx_Statictagcloud_Domain_Model_Tag
 */
class Tag extends AbstractEntity
{
    /**
     * Tag
     *
     * @var string
     */
    protected $tag = '';

    /**
     * Link
     *
     * @var string
     */
    protected $link = '';

    /**
     * Priority
     *
     * @var int
     */
    protected $priority = 0;

    /**
     * Sorting
     *
     * @var int
     */
    protected $sorting = 0;

    /**
     * Returns the tag
     *
     * @return string $tag
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Sets the tag
     *
     * @param string $tag
     * @return Tag
     */
    public function setTag(string $tag): Tag
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return Tag
     */
    public function setLink(string $link): Tag
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Returns the priority
     *
     * @return int $priority
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * Sets the priority
     *
     * @param int $priority
     * @return Tag
     */
    public function setPriority(int $priority): Tag
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Returns the sorting
     *
     * @return int $sorting
     */
    public function getSorting(): int
    {
        return $this->sorting;
    }

    /**
     * Sets the sorting
     *
     * @param int $sorting
     * @return Tag
     */
    public function setSorting(int $sorting): Tag
    {
        $this->sorting = $sorting;
        return $this;
    }
}
