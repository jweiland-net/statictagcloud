<?php
namespace JWeiland\Statictagcloud\Controller;

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

use JWeiland\Statictagcloud\Domain\Repository\TagRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class TagController
 *
 * @package JWeiland\Statictagcloud\Controller
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
     * @return void
     */
    public function injectTagRepository(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign('tags', $tags->getQuery()->setLimit(9)->execute());
    }
}
