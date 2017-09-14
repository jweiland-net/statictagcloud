<?php
namespace JWeiland\Statictagcloud\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Tx_Statictagcloud_Domain_Model_Tag
 *
 * @package JWeiland\Statictagcloud\Domain\Model
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
     * @return void
     */
    public function setTag(string $tag)
    {
        $this->tag = $tag;
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
     * @return void
     */
    public function setLink(string $link)
    {
        $this->link = $link;
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
     * @return void
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;
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
     * @return void
     */
    public function setSorting(int $sorting)
    {
        $this->sorting = $sorting;
    }
}
