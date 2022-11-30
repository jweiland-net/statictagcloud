<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Tagcloud',
    'description' => 'Create your own static tagcloud and define on your own which word has priority',
    'category' => 'plugin',
    'author' => 'Stefan froemken',
    'author_email' => 'sfroemken@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.17-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
