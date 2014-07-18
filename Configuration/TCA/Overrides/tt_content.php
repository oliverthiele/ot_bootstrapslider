<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TCA']['tt_content']['types']['ot_bootstrapslider_pi1']['showitem'] = 'CType;;4;button;1-1-1, header;;3;;2-2-2, image';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ot_bootstrapslider', 'Configuration/TypoScript/', 'Bootstrap Slider');
