<?php
class Foo {
  // variable doc
  public $test;
  public $other = 1;
  public static $staticTest = ['hi'];

  /**
   * This is a function
   */
  private function hi($input) {
    return $input . $this->test;
  }

  public function reallyReallyReallyReallyReallyReallyReallyLongMethodName($input, $otherInput = 1) {
    return true;
  }

  // doc test
  public static function testStaticFunction($input) {
    return self::$staticTest[0];
  }
}
