<?php

namespace App\Enums;

enum PostStatus: int
{
    case DRAFT = 1;
    case PUBLISHED = 2;
    case SCHEDULED = 4;
}
