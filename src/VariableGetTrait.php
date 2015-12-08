<?php

namespace Drupal\example_module;

trait VariableGetTrait {

  /**
   * This method simply wraps the procedural call.
   *
   * @param $name
   * @param null $default
   * @return mixed
   */
  public function variable_get($name, $default = NULL) {
    return variable_get($name, $default);
  }
}
