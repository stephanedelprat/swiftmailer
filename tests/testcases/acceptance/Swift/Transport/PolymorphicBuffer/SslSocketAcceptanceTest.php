<?php

require_once 'Swift/Tests/SwiftUnitTestCase.php';
require_once 'Swift/Transport/PolymorphicBuffer.php';

class Swift_Transport_PolymorphicBuffer_SslSocketAcceptanceTest
  extends Swift_Tests_SwiftUnitTestCase
{

  private $_buffer;
  
  public function skip()
  {
    $this->skipUnless(SWIFT_SSL_HOST,
      'Cannot run test without an SSL enabled SMTP host to connect to (define ' .
      'SWIFT_SSL_HOST in tests/config.php if you wish to run this test)'
      );
  }
  
  public function setUp()
  {
    $this->_buffer = new Swift_Transport_PolymorphicBuffer();
  }
  
  public function testNothing()
  {
    $this->assertFalse(true);
  }
  
}
