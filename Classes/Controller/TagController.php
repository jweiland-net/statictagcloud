<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/staticagcloud.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Statictagcloud\Controller;

use JWeiland\Statictagcloud\Domain\Repository\TagRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller to get tags from DB and sending result to view
 */
class TagController extends ActionController
{
    public function __construct(protected readonly TagRepository $tagRepository) {}

    public function listAction(): ResponseInterface
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign(
            'tags',
            $tags->getQuery()->setLimit(9)->execute(),
        );
        return $this->htmlResponse();
    }
}
