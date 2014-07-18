<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:ot_bootstrapslider/Resources/Private/Language/locallang_db.xlf:tt_content.CType_pi1',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/ext_icon.gif'
), 'CType');


if (TYPO3_MODE == 'BE') {
	/**
	 * Wizard pi1
	 */
	$GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['ot_bootstrapslider_wizicon'] =
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Resources/Private/Php/class.ot_bootstrapslider_wizicon.php';
}

