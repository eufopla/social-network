<?php

namespace App\Http\Entities\Post;

use App\Http\Entities\MainEntity;

class Picture extends MainEntity
{
    public ?int $id;
    public ?int $idPost;
    public ?string $path;
    public ?string $status = 'active';
    public ?string $createdAt;
    public ?string $updatedAt;
}
