<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/statictagcloud.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Statictagcloud\Controller;

use JWeiland\Statictagcloud\Domain\Repository\TagRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller to get tags from DB and sending result to view
 */
class TagController extends ActionController
{
    /**
     * @var TagRepository
     */
    protected $tagRepository;

    public function injectTagRepository(TagRepository $tagRepository): void
    {
        $this->tagRepository = $tagRepository;
    }

    public function listAction(): void
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign(
            'tags',
            $tags->getQuery()->setLimit(9)->execute()
        );
    }
}
