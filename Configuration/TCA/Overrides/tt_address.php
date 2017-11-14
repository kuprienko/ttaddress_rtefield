<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}
// http://www.sklein-medien.de/tutorials/detail/typo3-datenbanktabellen-um-neue-felder-erweitern/

$tempColumns = array (
    'tx_ttaddressrtefield_rtecontent' => array (
        'exclude' => 0,
        'label' => 'LLL:EXT:ttaddress_rtefield/locallang_db.xml:tt_address.tx_ttaddressrtefield_rtecontent',
        'config' => array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
            'eval' => 'trim',
        ),
        // https://docs.typo3.org/typo3cms/CoreApiReference/6.2/Rte/InTheBackend/Index.html
        'defaultExtras' => 'richtext[]'
    ),
);

//\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tt_address');
// Add new fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address',$tempColumns);
// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_address', // Table name
    'tx_ttaddressrtefield_rtecontent;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_ttaddressrtefield/rte/];1-1-1', // Field list to add
    # '--palette--;LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.palette_title;tx_pagesaddfields',
    '', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:description' // Insert fields before (default) or after one, or replace a field
);
// Add the new palette if there is new palette:
#$GLOBALS['TCA']['pages']['palettes']['tx_pagesaddfields'] = array(
#  'showitem' => 'tx_pagesaddfields_customcheckbox,tx_pagesaddfields_customtext'
#);
