<?php

namespace Drupal\holiday;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Invite entities.
 *
 * @ingroup holiday
 */
interface InviteInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Invite name.
   *
   * @return string
   *   Name of the Invite.
   */
  public function getName();

  /**
   * Sets the Invite name.
   *
   * @param string $name
   *   The Invite name.
   *
   * @return \Drupal\holiday\InviteInterface
   *   The called Invite entity.
   */
  public function setName($name);

  /**
   * Gets the Invite creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Invite.
   */
  public function getCreatedTime();

  /**
   * Sets the Invite creation timestamp.
   *
   * @param int $timestamp
   *   The Invite creation timestamp.
   *
   * @return \Drupal\holiday\InviteInterface
   *   The called Invite entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Invite published status indicator.
   *
   * Unpublished Invite are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Invite is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Invite.
   *
   * @param bool $published
   *   TRUE to set this Invite to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\holiday\InviteInterface
   *   The called Invite entity.
   */
  public function setPublished($published);
  
  /*
   * @param int $status
   * Код статуса
   * 
   * @return \Drupal\holiday\InviteInterface
   */
  public function setHoliStatus($status);

}
