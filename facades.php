<?php

//Classe per la gestione dei profili utente
class UserProfileManager
{
    public function getUserProfile($userId)
    {
        return "Profilo dell'utente con ID $userId";
    }
}

//Classe per la gestione dei giochi
class GameManager
{
    public function purchaseGame($userId, $gameId)
    {
        return "L'utente con ID $userId ha acquistato il gioco con ID $gameId";
    }

    public function getGameInfo($gameId)
    {
        return "Informazioni sul gioco con ID $gameId";
    }
}


class GameFacade
{
    private $userProfileManager;
    private $gameManager;

    public function __construct()
    {
        $this->userProfileManager = new UserProfileManager();
        $this->gameManager = new GameManager();
    }

    public function purchaseAndDisplayGameInfo($userId, $gameId)
    {
        $userProfile = $this->userProfileManager->getUserProfile($userId);
        $purchaseResult = $this->gameManager->purchaseGame($userId, $gameId);
        $gameInfo = $this->gameManager->getGameInfo($gameId);

        return "Operazioni eseguite:\n$userProfile\n$purchaseResult\n$gameInfo";
    }
}


$gameFacade = new GameFacade();
$userId = 123;
$gameId = 456;
$result = $gameFacade->purchaseAndDisplayGameInfo($userId, $gameId);
echo $result;
