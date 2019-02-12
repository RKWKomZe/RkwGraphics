<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.RkwGraphics',
            'Graphics',
            [
                'Graphics' => 'donut, bars'
            ],
            // non-cacheable actions
            [
                'Graphics' => ''
            ]
        );
    },
    $_EXTKEY
);
