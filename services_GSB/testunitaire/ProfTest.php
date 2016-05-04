<?php
class ProfTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testMyTest()
    {
        // Arrange
        $a = 10;

        // Act
        $b = 10;

        // Assert
        $this->assertEquals($a, $b, "Error du test");
    }

    // ...
}