<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class for AddEntity plugin.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Plugins
 * @since       3.6.2
 */
class plgContentAddentityTest extends PHPUnit_Framework_TestCase
{

    public function MockTestEqual()
    {
        $this->assertEquals (1, 1, 'Equal-Test');
    }

    public function MockTestSame()
    {
        $this->assertSame (1, 1, 'Same-Test');
    }
}
