<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Tagcloud',
    'description' => 'Create your own static tagcloud and define on your own which word has priority',
    'category' => 'plugin',
    'author' => 'Stefan froemken',
    'author_email' => 'sfroemken@jweiland.net',
    'author_company' => 'jweiland.net',
    'state' => 'stable',
    'version' => '4.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.32-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
