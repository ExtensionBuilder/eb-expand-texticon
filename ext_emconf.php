<?php

/*
 * Version 1.0.0
 * 
 * This file is part of the package ExtensionBuilder/EbExpandTexticon
 * 
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 * 
 * 
 * Extension created with Extension Builder for TYPO3
 *   Version Editor:  0.4.101
 *   Version Core:    0.4.87
 *   Build date/time: 9.1.2025 18:58:49
 * 
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extension Builder - Expand content element "Text and Icon"',
    'description' => 'Expand BK2K Bootstrap Package content element “Text and Icon” with some open source SVG icon libraries',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'bootstrap_package' => '15',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ExtensionBuilder\\EbExpandTexticon\\' => 'Classes',
        ],
    ],
];
