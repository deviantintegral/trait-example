<?php

// We import our stub class instead of the class directly.
use Drupal\Tests\example_module\Stub\RequiresVariableGet;

/**
 * Not a functional testing class.
 *
 * @class TestRequireVariableGet
 */
class TestRequireVariableGet {

  public function test() {
    // Do whatever setup is required (might be nothing). Then you can call the
    // method that needs the procedural code.
    new RequiresVariableGet();
  }
}
