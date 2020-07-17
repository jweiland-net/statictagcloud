<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.statictagcloud',
    'Tagcloud',
    [
        'Tag' => 'list'
    ],
    // non-cacheable actions
    [
        'Tag' => ''
    ]
);
