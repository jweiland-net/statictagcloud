<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:statictagcloud/Resources/Private/Language/locallang_db.xlf:tx_statictagcloud_domain_model_tag',
        'label' => 'tag',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'sortby' => 'sorting',
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ],
        'searchFields' => 'tag,link,priority,',
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('statictagcloud') . 'Configuration/TCA/Tag.php',
        'iconfile' => 'EXT:statictagcloud/Resources/Public/Icons/tx_statictagcloud_domain_model_tag.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, tag, link, priority'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, tag, link, priority,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime']
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['', 0]
                ],
                'foreign_table' => 'tx_statictagcloud_domain_model_tag',
                'foreign_table_where' => 'AND tx_statictagcloud_domain_model_tag.pid=###CURRENT_PID### AND tx_statictagcloud_domain_model_tag.sys_language_uid IN (-1,0)'
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255
            ]
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check'
            ]
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ]
            ]
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ]
            ]
        ],
        'tag' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:statictagcloud/Resources/Private/Language/locallang_db.xlf:tx_statictagcloud_domain_model_tag.tag',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ]
        ],
        'link' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:statictagcloud/Resources/Private/Language/locallang_db.xlf:tx_statictagcloud_domain_model_tag.link',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'pages',
                'minitems' => 1,
                'maxitems' => 1,
                'show_thumbs' => 0,
                'wizards' => [
                    'suggest' => [
                        'type' => 'suggest'
                    ]
                ]
            ]
        ],
        'priority' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:statictagcloud/Resources/Private/Language/locallang_db.xlf:tx_statictagcloud_domain_model_tag.priority',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['1', 1],
                    ['2', 2],
                    ['3', 3],
                    ['4', 4],
                    ['5', 5]
                ],
                'size' => 1,
                'maxitems' => 1
            ]
        ],
        'sorting' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ]
];
