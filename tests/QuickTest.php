<?php

require_once('./vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class QuickTest extends TestCase
{
  public function testPushAndPop()
  {
    $this->assertSame(0, 0);
  }
}
