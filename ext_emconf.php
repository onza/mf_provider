<?php

$EM_CONF[$_EXTKEY] = [
  'title' => 'TYPO3 Provider Extension',
  'description' => 'Custom Website Template for TYPO3 CMS',
  'category' => 'templates',
  'version' => '1.1.0',
  'state' => 'stable',
  'clearcacheonload' => 1,
  'author' => 'Martin Farkas',
  'author_email' => 'info@martinfarkas.com',
  'author_company' => 'Websites & Graphix',
  'constraints' => [
    'depends' => [
      'typo3' => '8.7.*',
      'rte_ckeditor' => '8.7.*'
    ],
    'conflicts' => [
      'fluidpages' => '*',
      'themes' => '*',
    ],
  ],
];
