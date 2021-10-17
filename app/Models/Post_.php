<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marcellino",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab esse aliquam consectetur ullam aperiam sed, delectus adipisci dolores incidunt at tempore est, quaerat dolore quam. Ex nihil tempora molestias error."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit molestiae iusto animi earum eveniet aperiam enim, in consequatur accusamus. Neque cupiditate debitis itaque nihil, porro quasi, officiis consequuntur voluptate sequi laboriosam maiores assumenda molestias aspernatur dolorem alias! Quas facilis libero voluptatem, velit soluta accusantium. Consectetur similique distinctio iste eos quae sapiente, dolor incidunt veniam ad porro quis unde magnam, consequatur esse et quidem soluta? Aliquid sint commodi numquam eligendi eos dolorem tenetur voluptates consequatur ipsam odio enim quia ipsum esse et quibusdam fugiat eveniet magni ex, architecto est hic, tempore quam. Minus eaque nemo quas quia dolorem delectus nesciunt molestias?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
};
