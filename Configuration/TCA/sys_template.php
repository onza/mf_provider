<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
  'provider',
  'Configuration/TypoScript',
  'provider extension'
);
