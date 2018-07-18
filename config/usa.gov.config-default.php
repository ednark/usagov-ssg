<?php

$config = [
  'siteName' => 'USA.gov',
  'siteUrl'  => 'www.usa.gov',
  'baseDir'  => realpath(dirname(__FILE__).'/..'),
  'featuresPageBatchSize' => 5,
  'elasticsearch' => [
    'server'       => 'https://elasticsearch:9443',
    'index'        => 'cmp-data-entities',
    'batchSize'    => 100,
    'getAllAssets' => [ 'directory_content_type', 'state_details' ],
  ],
  'drupalAPI' => [
    'server'    => 'https://usa-cmp-stg.gsa.ctacdev.com',
    'url'       => '/usaapi/entities',
    'batchSize' => 100
  ],
  'templateSync' => [
    'repo_url'    => '',
    'repo_user'   => '',
    'repo_pass'   => '',
    'repo_branch' => '',
    'repo_template_dir' => ''
  ]
];
