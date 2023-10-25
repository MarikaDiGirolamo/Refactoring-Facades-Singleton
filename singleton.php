<?php
class LordOfTheRingsCharacters
{
    private static $instance;
    private $characters = [];

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function addCharacter($name)
    {
        $this->characters[] = $name;
    }

    public function listCharacters()
    {
        return $this->characters;
    }
}


$lotrCharacters = LordOfTheRingsCharacters::getInstance();
$lotrCharacters->addCharacter("Frodo Baggins");
$lotrCharacters->addCharacter("Aragorn");
$lotrCharacters->addCharacter("Legolas");
$characters = $lotrCharacters->listCharacters();

echo implode(', ', $characters);
