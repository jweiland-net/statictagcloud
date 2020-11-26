<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'statictagcloud',
    'Configuration/TypoScript',
    'Static Tagcloud'
);
