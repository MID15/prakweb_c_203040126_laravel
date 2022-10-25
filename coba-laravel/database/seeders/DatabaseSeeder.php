<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Indra Wahyudi',
            'email' => 'mindraw595@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Kalam Mahardika',
            'email' => 'kalam.mahardika@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'tittle' => 'Judul Pertama',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem Ipsum Keempat',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A adipisci accusantium magnam temporibus omnis repudiandae soluta unde sed ipsum et officia reprehenderit quae, nihil pariatur quos reiciendis rem dolorum quibusdam dolorem, hic fuga, amet nulla dicta. Explicabo voluptas odit sequi libero voluptatem unde quae, qui cumque, dolores sapiente saepe maiores iusto, expedita ullam officia nulla. Omnis quibusdam expedita,</p>rem tempore, ut sint similique possimus atque et, enim laborum animi. Dolore quae vel sit assumenda, est eaque eius animi temporibus asperiores? Voluptatem, earum inventore? Saepe corporis laboriosam delectus fuga earum consequatur rem. Harum quidem maiores perspiciatis laboriosam iste dolorum culpa animi architecto labore eligendi, consectetur officiis hic recusandae facilis necessitatibus neque sed. Veritatis aliquam nostrum rerum excepturi officia? Facere labore unde nemo laborum, deserunt id officiis architecto? Rerum alias porro dignissimos neque? Sequi, vero sunt. Asperiores veritatis eos quaerat qui magni quia sapiente esse maiores. Reiciendis aliquid ad quisquam debitis itaque a sint nostrum molestiae impedit nam facilis, adipisci deleniti nemo iusto consequatur recusandae doloribus dolorum illum eos, officiis ipsa dolore unde. <p></p><p>Nam voluptas quibusdam labore asperiores, similique incidunt repellat et deserunt repellendus autem dolor eligendi rerum reprehenderit aut ea quasi doloremque provident consequuntur, debitis alias distinctio sint expedita sunt. Quod iste aperiam reprehenderit optio, ducimus reiciendis doloribus mollitia tempora ab, incidunt debitis dolorum quas molestias omnis explicabo veniam consequuntur fuga. Quod tempore reiciendis debitis dolores! Iste quasi vero culpa beatae maxime, laborum quam a dolorum expedita dignissimos consequuntur. Ea, enim! Laboriosam quae aspernatur non provident quaerat molestiae ea ipsam ad!</p>'
        ]);

        Post::create([
            'tittle' => 'Judul Ke Dua',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem Ipsum Kedua',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A adipisci accusantium magnam temporibus omnis repudiandae soluta unde sed ipsum et officia reprehenderit quae, nihil pariatur quos reiciendis rem dolorum quibusdam dolorem, hic fuga, amet nulla dicta. Explicabo voluptas odit sequi libero voluptatem unde quae, qui cumque, dolores sapiente saepe maiores iusto, expedita ullam officia nulla. Omnis quibusdam expedita,</p>rem tempore, ut sint similique possimus atque et, enim laborum animi. Dolore quae vel sit assumenda, est eaque eius animi temporibus asperiores? Voluptatem, earum inventore? Saepe corporis laboriosam delectus fuga earum consequatur rem. Harum quidem maiores perspiciatis laboriosam iste dolorum culpa animi architecto labore eligendi, consectetur officiis hic recusandae facilis necessitatibus neque sed. Veritatis aliquam nostrum rerum excepturi officia? Facere labore unde nemo laborum, deserunt id officiis architecto? Rerum alias porro dignissimos neque? Sequi, vero sunt. Asperiores veritatis eos quaerat qui magni quia sapiente esse maiores. Reiciendis aliquid ad quisquam debitis itaque a sint nostrum molestiae impedit nam facilis, adipisci deleniti nemo iusto consequatur recusandae doloribus dolorum illum eos, officiis ipsa dolore unde. <p></p><p>Nam voluptas quibusdam labore asperiores, similique incidunt repellat et deserunt repellendus autem dolor eligendi rerum reprehenderit aut ea quasi doloremque provident consequuntur, debitis alias distinctio sint expedita sunt. Quod iste aperiam reprehenderit optio, ducimus reiciendis doloribus mollitia tempora ab, incidunt debitis dolorum quas molestias omnis explicabo veniam consequuntur fuga. Quod tempore reiciendis debitis dolores! Iste quasi vero culpa beatae maxime, laborum quam a dolorum expedita dignissimos consequuntur. Ea, enim! Laboriosam quae aspernatur non provident quaerat molestiae ea ipsam ad!</p>'
        ]);

        Post::create([
            'tittle' => 'Judul Ke Tiga',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem Ipsum Ketiga',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A adipisci accusantium magnam temporibus omnis repudiandae soluta unde sed ipsum et officia reprehenderit quae, nihil pariatur quos reiciendis rem dolorum quibusdam dolorem, hic fuga, amet nulla dicta. Explicabo voluptas odit sequi libero voluptatem unde quae, qui cumque, dolores sapiente saepe maiores iusto, expedita ullam officia nulla. Omnis quibusdam expedita,</p>rem tempore, ut sint similique possimus atque et, enim laborum animi. Dolore quae vel sit assumenda, est eaque eius animi temporibus asperiores? Voluptatem, earum inventore? Saepe corporis laboriosam delectus fuga earum consequatur rem. Harum quidem maiores perspiciatis laboriosam iste dolorum culpa animi architecto labore eligendi, consectetur officiis hic recusandae facilis necessitatibus neque sed. Veritatis aliquam nostrum rerum excepturi officia? Facere labore unde nemo laborum, deserunt id officiis architecto? Rerum alias porro dignissimos neque? Sequi, vero sunt. Asperiores veritatis eos quaerat qui magni quia sapiente esse maiores. Reiciendis aliquid ad quisquam debitis itaque a sint nostrum molestiae impedit nam facilis, adipisci deleniti nemo iusto consequatur recusandae doloribus dolorum illum eos, officiis ipsa dolore unde. <p></p><p>Nam voluptas quibusdam labore asperiores, similique incidunt repellat et deserunt repellendus autem dolor eligendi rerum reprehenderit aut ea quasi doloremque provident consequuntur, debitis alias distinctio sint expedita sunt. Quod iste aperiam reprehenderit optio, ducimus reiciendis doloribus mollitia tempora ab, incidunt debitis dolorum quas molestias omnis explicabo veniam consequuntur fuga. Quod tempore reiciendis debitis dolores! Iste quasi vero culpa beatae maxime, laborum quam a dolorum expedita dignissimos consequuntur. Ea, enim! Laboriosam quae aspernatur non provident quaerat molestiae ea ipsam ad!</p>'
        ]);

        Post::create([
            'tittle' => 'Judul Keempat',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem Ipsum Keempat',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A adipisci accusantium magnam temporibus omnis repudiandae soluta unde sed ipsum et officia reprehenderit quae, nihil pariatur quos reiciendis rem dolorum quibusdam dolorem, hic fuga, amet nulla dicta. Explicabo voluptas odit sequi libero voluptatem unde quae, qui cumque, dolores sapiente saepe maiores iusto, expedita ullam officia nulla. Omnis quibusdam expedita,</p>rem tempore, ut sint similique possimus atque et, enim laborum animi. Dolore quae vel sit assumenda, est eaque eius animi temporibus asperiores? Voluptatem, earum inventore? Saepe corporis laboriosam delectus fuga earum consequatur rem. Harum quidem maiores perspiciatis laboriosam iste dolorum culpa animi architecto labore eligendi, consectetur officiis hic recusandae facilis necessitatibus neque sed. Veritatis aliquam nostrum rerum excepturi officia? Facere labore unde nemo laborum, deserunt id officiis architecto? Rerum alias porro dignissimos neque? Sequi, vero sunt. Asperiores veritatis eos quaerat qui magni quia sapiente esse maiores. Reiciendis aliquid ad quisquam debitis itaque a sint nostrum molestiae impedit nam facilis, adipisci deleniti nemo iusto consequatur recusandae doloribus dolorum illum eos, officiis ipsa dolore unde. <p></p><p>Nam voluptas quibusdam labore asperiores, similique incidunt repellat et deserunt repellendus autem dolor eligendi rerum reprehenderit aut ea quasi doloremque provident consequuntur, debitis alias distinctio sint expedita sunt. Quod iste aperiam reprehenderit optio, ducimus reiciendis doloribus mollitia tempora ab, incidunt debitis dolorum quas molestias omnis explicabo veniam consequuntur fuga. Quod tempore reiciendis debitis dolores! Iste quasi vero culpa beatae maxime, laborum quam a dolorum expedita dignissimos consequuntur. Ea, enim! Laboriosam quae aspernatur non provident quaerat molestiae ea ipsam ad!</p>'
        ]);
    }
}
