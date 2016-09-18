<?php

/**
 * @file
 * Contains inquiry.page.inc.
 *
 * Page callback for Inquiry entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Inquiry templates.
 *
 * Default template: inquiry.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_inquiry(array &$variables) {
  // Fetch Inquiry Entity Object.
  $inquiry = $variables['elements']['#inquiry'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
