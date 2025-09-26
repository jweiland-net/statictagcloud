<?php

/*
 * This file is part of the package jweiland/staticagcloud.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

if (!defined('TYPO3')) {
    die('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'statictagcloud',
    'Configuration/TypoScript',
    'Static Tagcloud',
);
