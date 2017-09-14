<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JWeiland.' . $_EXTKEY,
    'Tagcloud',
    [
        'Tag' => 'list'
    ],
    // non-cacheable actions
    [
        'Tag' => ''
    ]
);
