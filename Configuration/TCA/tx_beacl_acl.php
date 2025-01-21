<?php

if (! defined('TYPO3')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'type',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'default_sortby' => 'ORDER BY type',
        'typeicon_classes' => [
            'default' => 'tx_beacl-object-info',
        ]
    ],
    'columns' => [
        'type' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.type.I.0', 'value' => '0'],
                    ['label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.type.I.1', 'value' => '1'],
                ],
                'size' => 1,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'object_id' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.object_id',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'itemsProcFunc' =>  \JBartels\BeAcl\Utility\ObjectSelection::class . '->select',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'permissions' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.permissions',
            'config' => [
                'type' => 'check',
                'cols' => 5,
                'items' => [
                    ['label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.permissions.I.0', 'value' => ''],
                    ['label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.permissions.I.1', 'value' => ''],
                    ['label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.permissions.I.2', 'value' => ''],
                    ['label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.permissions.I.3', 'value' => ''],
                    ['label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.permissions.I.4', 'value' => ''],
                ],
            ],
        ],
        'recursive' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:be_acl/Resources/Private/Languages/locallang_db.xlf:tx_beacl_acl.recursive',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'type, object_id, permissions, recursive',
        ],
        '1' => [
            'showitem' => 'type, object_id, permissions, recursive',
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => '',
        ],
    ],
];
