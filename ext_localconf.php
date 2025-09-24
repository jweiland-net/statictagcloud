<?php

use JWeiland\Statictagcloud\Controller\TagController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(function () {
    ExtensionUtility::configurePlugin(
        'Statictagcloud',
        'Tagcloud',
        [
            TagController::class => 'list',
        ],
        // non-cacheable actions
        [
            TagController::class => '',
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
    );
});
