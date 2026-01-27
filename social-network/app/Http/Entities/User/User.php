<?php

namespace App\Http\Entities\User;

use App\Http\Entities\MainEntity;

class User extends MainEntity
{
    public ?int $id = null;
    public ?string $firstName = null;
    public ?string $lastName = null;
    public ?string $email = null;
    public ?int $email_verified = 0;
    public ?string $login = null;
    public ?string $password = null;
    public int $passwordChangeNeeded = 0;
    public ?string $token = null;
    public ?string $tokenExpirationDate = null;
    public ?int $active = 0;
    public ?int $delete = 0;
    public ?int $ban = 0;
    public ?string $validationToken = null;
    public ?string $validationTokenExpirationDate = null;
    public int $idProfile = 0;
    public ?string $civility = null;
    public ?string $phone = null;
    public int $idLanguage = 1;
    public ?int $changePasswordToken = null;
    public ?string $changePasswordTokenExpirationDate = null;
    public ?int $changePasswordCurrentAttempt = 0;
    public ?int $changePasswordGlobalAttempt = 0;
    public ?string $dateChangePasswordBlocked = null;
    public ?string $changeTempEmail = null;
    public ?int $changeEmailToken = null;
    public ?int $firstConnection = 1;
    public ?int $consentCookies = null;
    public ?int $connectionCurrentAttempt = 0;
    public ?string $lastConnexionAttempt = null;
    public string $dateChatConsent;
    public ?string $lastConnection = null;
    public ?string $dateCreated = null;
    public ?string $dateUpdated = null;
}
