<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 =>
  array (
    'name' => 'CiviXero Contact Push Job',
    'entity' => 'Job',
    'params' =>
    array (
      'version' => 3,
      'name' => 'CiviXero Contact Push Job',
      'description' => 'Push updated contacts to Xero',
      'api_entity' => 'xerosync',
      'api_action' => 'contactpush',
      'run_frequency' => 'Always',
      'parameters' => 'plugin=xero',
    ),
  ),
  1 =>
  array (
    'name' => 'CiviXero Contact Pull Job',
    'entity' => 'Job',
    'params' =>
    array (
      'version' => 3,
      'name' => 'CiviXero Contact Pull Job',
      'description' => 'Pull updated contacts from Xero',
      'api_entity' => 'xerosync',
      'api_action' => 'contactpull',
      'run_frequency' => 'Always',
      'parameters' => 'plugin=xero, start_date=yesterday',
    ),
  ),
  array (
    'name' => 'CiviXero Invoice Push Job',
    'entity' => 'Job',
    'params' =>
    array (
      'version' => 3,
      'name' => 'CiviXero Invoice Push Job',
      'description' => 'Push updated invoices from Xero',
      'api_entity' => 'xerosync',
      'api_action' => 'invoicepush',
      'run_frequency' => 'Always',
      'parameters' => 'plugin=xero',
    ),
  ),
  array (
    'name' => 'CiviXero Invoice Pull Job',
    'entity' => 'Job',
    'params' =>
    array (
      'version' => 3,
      'name' => 'CiviXero Invoice Pull Job',
      'description' => 'Pull updated invoices from Xero',
      'api_entity' => 'xerosync',
      'api_action' => 'invoicepull',
      'run_frequency' => 'Always',
      'parameters' => 'plugin=xero, start_date=yesterday',
    ),
  ),
);