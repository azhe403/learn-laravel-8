<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;

class PostOld
{
    use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Judul pertama gan",
            "slug" => "judul-pertama",
            "author" => "Azhe-kun",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, autem corporis cum debitis delectus dolores eos illum itaque modi nihil numquam odio possimus quod reprehenderit sapiente similique, ut. Harum!"
        ],
        [
            "title" => "Judul kedua sis",
            "slug" => "judul-kedua",
            "author" => "Fulan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, autem corporis cum debitis delectus dolores eos illum itaque modi nihil numquam odio possimus quod reprehenderit sapiente similique, ut. Harum!"
        ]
    ];

    /**
     * @return Collection
     */
    public static function all(): Collection
    {
        return collect(self::$blog_posts);
    }

    /**
     * @param $slug
     * @return mixed
     */
    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);
    }
}
