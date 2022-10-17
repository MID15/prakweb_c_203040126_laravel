<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Mochamad Indra Wahyudi",
        "email" => "mindraw595@gmail.com",
        "image" => "profile1.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman Single Posts
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
