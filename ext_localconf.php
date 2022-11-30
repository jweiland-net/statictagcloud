<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Statictagcloud',
        'Tagcloud',
        [
            \JWeiland\Statictagcloud\Controller\TagController::class => 'list',
        ],
        // non-cacheable actions
        [
            \JWeiland\Statictagcloud\Controller\TagController::class => '',
        ]
    );

    // add statictagcloud plugin to new element wizard
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:statictagcloud/Configuration/TSconfig/ContentElementWizard.txt">'
    );

    // Register SVG Icon Identifier
    $svgIcons = [
        'ext-statictagcloud-tagcloud-wizard-icon' => 'plugin_wizard.svg',
    ];
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );
    foreach ($svgIcons as $identifier => $fileName) {
        $iconRegistry->registerIcon(
            $identifier,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:statictagcloud/Resources/Public/Icons/' . $fileName]
        );
    }
});
