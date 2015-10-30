<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$_EXTKEY = 'mfc_dataprotection';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'LLL:EXT:mfc_dataprotection/Resources/Private/Language/locallang_db.xml:CType.ga_opt.header',
        $_EXTKEY . '_ga_optout',
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
    ), 'list_type'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/',
    'MFC Data Protection'
);



