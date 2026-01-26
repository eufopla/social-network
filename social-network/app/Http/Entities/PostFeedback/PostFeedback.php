<?php

namespace App\Http\Entities\PostFeedback;

use App\Http\Entities\MainEntity;

class PostFeedback extends MainEntity
{
    public ?int $id;
    public ?int $idPost;
    public ?string $content;
    public ?int $idTargetUser;
    public ?int $idSession;
    public ?int $rate;
    public ?string $sessionDuration;
}