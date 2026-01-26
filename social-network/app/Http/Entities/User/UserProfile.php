<?php

namespace App\Http\Entities\User;

use App\Http\Entities\MainEntity;

class UserProfile extends MainEntity
{
    public ?int $id = null;
    public ?string $userName = null;
    public $logo = null;
    public ?string $bio = null;
}
