<?php

namespace Drupal\example_module;

class RequiresVariableGet {
  use VariableGetTrait;

  public function __construct() {
    // The magic here is using $this to wrap the procedural call, calling the
    // trait method.
    return $this->variable_get('config_value');
  }
}
