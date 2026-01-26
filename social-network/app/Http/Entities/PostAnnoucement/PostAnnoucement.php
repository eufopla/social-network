<?php

namespace App\Http\Entities\PostAnnoucement;

use App\Http\Entities\MainEntity;

class PostAnnoucement extends MainEntity
{
    public ?int $id;
    public ?int $idPost;
    public ?string $content;
    public ?string $title;
    public ?string $beginDate;
    public ?string $endDate;
}