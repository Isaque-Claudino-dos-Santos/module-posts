<?php

namespace App\Models;

use App\Enums\PostStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(
    'image_file_name',
    'title',
    'content',
    'slug',
    'status',
    'published_at'
)]
class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $casts = [
        'status' => PostStatus::class,
        'published_at' => Carbon::class
    ];

    public function categories()
    {
        return $this->belongsToMany(PostCategory::class, 'post_category_post');
    }
}
