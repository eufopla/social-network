<?php

namespace App\Http\Entities\Rate;

use App\Http\Entities\MainEntity;

class Rate extends MainEntity
{
    public ?int $id;
    public ?int $idUser;
    public ?int $rate;
    public ?int $idTargetUser;
    public ?string $targetTableName;
    public ?int $idTableName;
    public ?string $createdAt;
}