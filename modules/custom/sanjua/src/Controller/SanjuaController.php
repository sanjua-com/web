<?php

namespace Drupal\sanjua\Controller;

use Drupal\Core\Controller\ControllerBase;

class SanjuaController extends ControllerBase {
  /**
   * @return array
   */
  public function content() {
    return array(
      '#title' => 'Pagina principal',
      '#markup' => 'El primer portal social para los sanjuaninos.',
    );
  }
}