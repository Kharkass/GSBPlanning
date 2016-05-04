<?php
// use C:\wamp\www\services_GSB\classes\PDOGsb.php;
echo dirname(__FILE__);

require('/classes/PDOGsb.php');

class PDOTest extends PHPUnit_Framework_TestCase
{
    // ...
	
		
	//use ..\classes\PDOGsb.php;

	// requete de test dans le cmd : phpunit --bootstrap vendor/autoload.php testunitaire/PDOTest.php
	
    public function testAuthentification()
    {
        // Arrange
		
        $a = PDOGsb::getPDOGsb(); 

        // Act
        $b = $a->verifierUser('hubert@gmail.com','123');

        // Assert
        $this->assertEquals(true, $b);
    }
	
	//C:\wamp\www\services_GSB\testunitaire

    // ...
}

?>