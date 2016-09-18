<?php

namespace Drupal\holiday;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Inquiry entities.
 *
 * @ingroup holiday
 */
interface InquiryInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Inquiry name.
   *
   * @return string
   *   Name of the Inquiry.
   */
  public function getName();

  /**
   * Sets the Inquiry name.
   *
   * @param string $name
   *   The Inquiry name.
   *
   * @return \Drupal\holiday\InquiryInterface
   *   The called Inquiry entity.
   */
  public function setName($name);

  /**
   * Gets the Inquiry creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Inquiry.
   */
  public function getCreatedTime();

  /**
   * Sets the Inquiry creation timestamp.
   *
   * @param int $timestamp
   *   The Inquiry creation timestamp.
   *
   * @return \Drupal\holiday\InquiryInterface
   *   The called Inquiry entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Inquiry published status indicator.
   *
   * Unpublished Inquiry are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Inquiry is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Inquiry.
   *
   * @param bool $published
   *   TRUE to set this Inquiry to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\holiday\InquiryInterface
   *   The called Inquiry entity.
   */
  public function setPublished($published);

}
