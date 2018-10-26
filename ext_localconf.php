<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Slub.XmlSitemap',
            'Sm',
            [
                'Sitemap' => 'list', 'listPages', 'index', 'listNews', 'listKitodo'
            ],
            // non-cacheable actions
            [
            ]
        );

    },
    $_EXTKEY
);
