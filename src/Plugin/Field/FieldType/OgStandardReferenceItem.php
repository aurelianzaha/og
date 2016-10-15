<?php

namespace Drupal\og\Plugin\Field\FieldType;

use Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class OgStandardReferenceItem.
 *
 * @FieldType(
 *   id = "og_standard_reference",
 *   label = @Translation("OG membership reference"),
 *   description = @Translation("An entity field containing an OG membership reference for a non-user entity."),
 *   category = @Translation("Reference"),
 *   no_ui = TRUE,
 *   default_widget = "entity_reference_autocomplete",
 *   default_formatter = "entity_reference_label",
 *   list_class = "\Drupal\Core\Field\EntityReferenceFieldItemList",
 *   constraints = {"ValidOgMembershipReference" = {}}
 * )
 */
class OgStandardReferenceItem extends EntityReferenceItem {

  /**
   * {@inheritdoc}
   */
  public static function defaultFieldSettings() {
    $settings = parent::defaultFieldSettings();
    $settings['access_override'] = FALSE;

    return $settings;
  }

}
