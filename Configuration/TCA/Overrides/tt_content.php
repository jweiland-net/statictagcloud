<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
if (!defined('TYPO3')) {
    die('Access denied.');
}

ExtensionUtility::registerPlugin(
    'Statictagcloud',
    'Tagcloud',
    'Static Tagcloud'
);
