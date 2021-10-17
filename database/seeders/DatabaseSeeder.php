<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

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

        User::create([
            'name' => 'Marcell',
            'username' => 'marcell',
            'email' => 'marcellino005@binus.ac.id',
            'password' => bcrypt('123123')
        ]);

        // User::create([
        //     'name' => 'Michelle',
        //     'email' => 'Michelle@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem error culpa voluptatem officia dolorum natus magnam voluptatibus blanditiis. Commodi necessitatibus eveniet, obcaecati non dicta voluptates eligendi iusto quisquam ad alias veritatis impedit, perspiciatis aut nisi quis enim atque earum sequi voluptatibus.</p><p>Harum voluptatem, animi laudantium quasi in iusto aut asperiores numquam, eum, sit nam. Voluptatibus mollitia consequuntur voluptas deserunt quos? Dolorum dolorem inventore mollitia earum nam omnis consectetur laudantium illum vero dolore modi ullam corrupti</p><p>laborum, qui expedita debitis nobis excepturi atque doloribus quae. Accusamus nam, nihil, inventore optio culpa similique tempore eaque vitae repudiandae laboriosam fugit, voluptatibus id quisquam minima praesentium libero molestias accusantium iste suscipit nisi blanditiis voluptate quod! Molestiae, quos non autem doloremque delectus est tempore ullam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem error culpa voluptatem officia dolorum natus magnam voluptatibus blanditiis. Commodi necessitatibus eveniet, obcaecati non dicta voluptates eligendi iusto quisquam ad alias veritatis impedit, perspiciatis aut nisi quis enim atque earum sequi voluptatibus.</p><p>Harum voluptatem, animi laudantium quasi in iusto aut asperiores numquam, eum, sit nam. Voluptatibus mollitia consequuntur voluptas deserunt quos? Dolorum dolorem inventore mollitia earum nam omnis consectetur laudantium illum vero dolore modi ullam corrupti</p><p>laborum, qui expedita debitis nobis excepturi atque doloribus quae. Accusamus nam, nihil, inventore optio culpa similique tempore eaque vitae repudiandae laboriosam fugit, voluptatibus id quisquam minima praesentium libero molestias accusantium iste suscipit nisi blanditiis voluptate quod! Molestiae, quos non autem doloremque delectus est tempore ullam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'user_id' => 2,
        //     'category_id' => 3,
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem error culpa voluptatem officia dolorum natus magnam voluptatibus blanditiis. Commodi necessitatibus eveniet, obcaecati non dicta voluptates eligendi iusto quisquam ad alias veritatis impedit, perspiciatis aut nisi quis enim atque earum sequi voluptatibus.</p><p>Harum voluptatem, animi laudantium quasi in iusto aut asperiores numquam, eum, sit nam. Voluptatibus mollitia consequuntur voluptas deserunt quos? Dolorum dolorem inventore mollitia earum nam omnis consectetur laudantium illum vero dolore modi ullam corrupti</p><p>laborum, qui expedita debitis nobis excepturi atque doloribus quae. Accusamus nam, nihil, inventore optio culpa similique tempore eaque vitae repudiandae laboriosam fugit, voluptatibus id quisquam minima praesentium libero molestias accusantium iste suscipit nisi blanditiis voluptate quod! Molestiae, quos non autem doloremque delectus est tempore ullam.</p>'
        // ]);
    }
}
