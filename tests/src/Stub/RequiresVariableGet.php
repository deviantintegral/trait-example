<?php

namespace Drupal\Tests\example_module\Stub;

// This use statement points the trait to the one in our test namespace instead
// of the one under src.
use Drupal\Tests\example_module\VariableGetTrait;

/**
 * Stub variable_get().
 *
 * @codeCoverageIgnore
 */
class RequiresVariableGet extends \Drupal\example_module\RequiresVariableGet {
  // Notice there's no code here - just using a different trait.
  use VariableGetTrait;
}
