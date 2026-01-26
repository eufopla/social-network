<?php

namespace App\Http\Entities\Post;

use App\Http\Entities\MainEntity;

class Post extends MainEntity
{
    public ?int $id;
    public ?int $idUser;
    public ?string $content;
    public ?string $postTableName;
    public ?int $postTableId;
    public ?string $status = 'active';
    public ?string $createdAt;
    public ?string $updatedAt;
}
