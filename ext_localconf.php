<?php

defined('TYPO3') or die('Access denied.');

// Register icon provider
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\ExtensionBuilder\EbExpandTexticon\Icons\TablerFilledIconsProvider::class]
    = \ExtensionBuilder\EbExpandTexticon\Icons\TablerFilledIconsProvider::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\ExtensionBuilder\EbExpandTexticon\Icons\TablerOutlineIconsProvider::class]
    = \ExtensionBuilder\EbExpandTexticon\Icons\TablerOutlineIconsProvider::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\ExtensionBuilder\EbExpandTexticon\Icons\IconoirRegularIconsProvider::class]
    = \ExtensionBuilder\EbExpandTexticon\Icons\IconoirRegularIconsProvider::class;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\ExtensionBuilder\EbExpandTexticon\Icons\IconoirSolidIconsProvider::class]
    = \ExtensionBuilder\EbExpandTexticon\Icons\IconoirSolidIconsProvider::class;
