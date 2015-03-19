<?php

/**
 * @file
 * This file contains no working PHP code; it exists to provide additional
 * documentation for doxygen as well as to document hooks in the standard
 * Drupal manner.
 */


/**
 * @defgroup farm_asset Farm asset module integrations.
 *
 * Module integrations with the farm_asset module.
 */

/**
 * @defgroup farm_asset_hooks Farm asset's hooks
 * @{
 * Hooks that can be implemented by other modules in order to extend farm_asset.
 */

/**
 * Attach Views to asset view pages.
 *
 * @return array
 *   Returns an array of View names to attach to farm asset pages.
 */
function hook_farm_asset_view_views($farm_asset) {

  // If the entity is not a planting, bail.
  if ($farm_asset->type != 'planting') {
    return;
  }

  // Return a list of Views to include on Plantings.
  return array(
    'farm_log_seeding',
    'farm_log_transplanting',
    'farm_log_input',
    'farm_log_harvest',
    'farm_log_activity',
    'farm_log_observation',
    'farm_log_movement',
  );
}

/**
 * @}
 */