<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'RKW.RkwGraphics',
            'Graphics',
            [
                'Graphics' => 'Pie, Bars'
            ],
            // non-cacheable actions
            [
                'Graphics' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					graphics {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_graphics.svg
						title = LLL:EXT:rkw_graphics/Resources/Private/Language/locallang_db.xlf:tx_rkw_graphics_domain_model_graphics
						description = LLL:EXT:rkw_graphics/Resources/Private/Language/locallang_db.xlf:tx_rkw_graphics_domain_model_graphics.description
						tt_content_defValues {
							CType = list
							list_type = rkwgraphics_graphics
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
