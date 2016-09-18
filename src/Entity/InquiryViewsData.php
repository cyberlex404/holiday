<?php

namespace Drupal\holiday\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Inquiry entities.
 */
class InquiryViewsData extends EntityViewsData implements EntityViewsDataInterface {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['inquiry']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Inquiry'),
      'help' => $this->t('The Inquiry ID.'),
    );

    return $data;
  }

}
