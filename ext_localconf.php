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

        /**
         * realurl Hook
         */

        if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl')) {
          $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][$extKey] =
            \Slub\XmlSitemap\Hooks\RealUrlAutoConfiguration::class . '->addFormsConfig';
        }

    },
    $_EXTKEY
);
