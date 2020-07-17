<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_statictagcloud_domain_model_tag',
    'EXT:statictagcloud/Resources/Private/Language/locallang_csh_tx_statictagcloud_domain_model_tag.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_statictagcloud_domain_model_tag'
);
