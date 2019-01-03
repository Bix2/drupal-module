<?php

namespace Drupal\icecream\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Icecream' Block.
 *
 * @Block(
 *   id = "icecream_block",
 *   admin_label = @Translation("Icecream Block"),
 *   category = @Translation("Icecream Block"),
 * )
 */
class IcecreamBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'icecream_theme',
      '#attached' => array(
        'library' => array(
          'icecream/icecream_library',
        ),
      ),
    ];
  }

}