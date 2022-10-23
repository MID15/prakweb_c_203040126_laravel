<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eum eos saepe officia ex nam beatae ipsum alias in quis unde dignissimos ullam, omnis ipsa veniam reiciendis quisquam minus repellat iste perferendis nesciunt vel tenetur? Unde inventore veritatis sed sit atque ab recusandae nesciunt magnam accusamus velit tempora, quos quia soluta id blanditiis voluptates maxime reprehenderit aliquid qui minus, rerum totam ullam. Maxime veritatis unde praesentium, possimus nesciunt sed ad tempore tenetur officia, repellat odio. Perspiciatis, optio magnam. Sint, delectus."
        ],
        [
            "tittle" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Indra Wahyudi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, at voluptatibus veritatis unde cumque deserunt similique, suscipit minima veniam numquam doloribus laudantium dignissimos aut optio provident neque? Vero ducimus tempore debitis commodi enim velit veniam recusandae aliquam ipsa accusantium cum minus eum culpa reprehenderit, voluptatum facere fuga aspernatur nesciunt incidunt deserunt! Adipisci, labore sequi. Qui, et placeat nulla unde architecto iusto dolorem dolores maiores. Beatae, consequatur. Praesentium suscipit corrupti accusamus, vero quibusdam dignissimos minima reiciendis corporis doloribus, facere, natus laboriosam impedit commodi repellendus libero eos quos illo! Aliquid sapiente porro perferendis. Veniam nobis ex labore numquam. Necessitatibus delectus eum vel!"
        ]
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
}
