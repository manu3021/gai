<?php
/**
 * @file
 * Contains \Drupal\gai\Controller\HelloController.
 */

namespace Drupal\gai\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Hello, Atul!'),
    );
  }
}
?>
