<?php

class ot_bootstrapslider_wizicon {
	const KEY = 'ot_bootstrapslider';

	/**
	 * Processing the wizard items array
	 *
	 * @param array $wizardItems The wizard items
	 * @return array array with wizard items
	 */
	public function proc($wizardItems) {
		$wizardItems['plugins_tx_' . self::KEY] = array(
			'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath(self::KEY) . 'Resources/Public/Icons/ce_wiz.gif',
			'title' => $GLOBALS['LANG']->sL('LLL:EXT:' . self::KEY . '/Resources/Private/Language/locallang_db.xlf:wizard_title'),
			'description' => $GLOBALS['LANG']->sL('LLL:EXT:' . self::KEY . '/Resources/Private/Language/locallang_db.xlf:wizard_description'),
			'params' => '&defVals[tt_content][CType]=ot_bootstrapslider_pi1'
		);

		return $wizardItems;
	}
}
