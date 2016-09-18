<?php

/**
 * @file
 * Contains invite.page.inc.
 *
 * Page callback for Invite entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Invite templates.
 *
 * Default template: invite.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_invite(array &$variables) {
  // Fetch Invite Entity Object.
  $invite = $variables['elements']['#invite'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
