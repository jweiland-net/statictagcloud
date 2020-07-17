<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/ce_headerimage.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Statictagcloud\Controller;

use JWeiland\Statictagcloud\Domain\Repository\TagRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class TagController
 */
class TagController extends ActionController
{
    /**
     * tagRepository
     *
     * @var TagRepository
     */
    protected $tagRepository;

    /**
     * inject tagRepository
     *
     * @param TagRepository $tagRepository
     */
    public function injectTagRepository(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * action list
     */
    public function listAction(): void
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign('tags', $tags->getQuery()->setLimit(9)->execute());
    }
}
