<?php

namespace Drupal\holiday;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Inquiry entity.
 *
 * @see \Drupal\holiday\Entity\Inquiry.
 */
class InquiryAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\holiday\InquiryInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished inquiry entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published inquiry entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit inquiry entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete inquiry entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add inquiry entities');
  }

}
