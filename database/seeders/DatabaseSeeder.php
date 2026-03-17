<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Putra',
        //     'email' => 'putra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jett',
        //     'email' => 'jett@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic. Nostrum ad cupiditate distinctio beatae architecto porro consequatur accusamus eligendi dolor corrupti dolorum, pariatur ab, esse eos quisquam qui eaque commodi quae totam, facilis rem fugiat quod ipsum quasi. Distinctio, vitae vero praesentium eos vel maiores necessitatibus asperiores numquam architecto. Commodi consequuntur accusantium optio architecto quaerat unde temporibus neque esse sint, consectetur dolor ut quasi hic culpa? Commodi, fugit? Voluptatibus, incidunt ut iste, corporis voluptatum consequatur debitis blanditiis rerum error delectus exercitationem? Odio dicta, quis iure eveniet sit magni suscipit voluptatem sunt facilis, similique voluptates, totam sequi libero ipsam nobis consequatur cum odit asperiores aperiam illo sed cupiditate quibusdam. Vero pariatur ipsum atque sed rerum quaerat excepturi! Ducimus quisquam repudiandae, cumque nisi blanditiis commodi deleniti quia autem expedita provident unde praesentium vero vitae recusandae sapiente maiores ipsum incidunt consequatur itaque odit laudantium aperiam dolorum.',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic. Nostrum ad cupiditate distinctio beatae architecto porro consequatur accusamus eligendi dolor corrupti dolorum, pariatur ab, esse eos quisquam qui eaque commodi quae totam, facilis rem fugiat quod ipsum quasi. Distinctio, vitae vero praesentium eos vel maiores necessitatibus asperiores numquam architecto. Commodi consequuntur accusantium optio architecto quaerat unde temporibus neque esse sint, consectetur dolor ut quasi hic culpa? Commodi, fugit? Voluptatibus, incidunt ut iste, corporis voluptatum consequatur debitis blanditiis rerum error delectus exercitationem? Odio dicta, quis iure eveniet sit magni suscipit voluptatem sunt facilis, similique voluptates, totam sequi libero ipsam nobis consequatur cum odit asperiores aperiam illo sed cupiditate quibusdam. Vero pariatur ipsum atque sed rerum quaerat excepturi! Ducimus quisquam repudiandae, cumque nisi blanditiis commodi deleniti quia autem expedita provident unde praesentium vero vitae recusandae sapiente maiores ipsum incidunt consequatur itaque odit laudantium aperiam dolorum.',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic. Nostrum ad cupiditate distinctio beatae architecto porro consequatur accusamus eligendi dolor corrupti dolorum, pariatur ab, esse eos quisquam qui eaque commodi quae totam, facilis rem fugiat quod ipsum quasi. Distinctio, vitae vero praesentium eos vel maiores necessitatibus asperiores numquam architecto. Commodi consequuntur accusantium optio architecto quaerat unde temporibus neque esse sint, consectetur dolor ut quasi hic culpa? Commodi, fugit? Voluptatibus, incidunt ut iste, corporis voluptatum consequatur debitis blanditiis rerum error delectus exercitationem? Odio dicta, quis iure eveniet sit magni suscipit voluptatem sunt facilis, similique voluptates, totam sequi libero ipsam nobis consequatur cum odit asperiores aperiam illo sed cupiditate quibusdam. Vero pariatur ipsum atque sed rerum quaerat excepturi! Ducimus quisquam repudiandae, cumque nisi blanditiis commodi deleniti quia autem expedita provident unde praesentium vero vitae recusandae sapiente maiores ipsum incidunt consequatur itaque odit laudantium aperiam dolorum.',
        //     'category_id' => 2,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque repellendus perferendis, architecto suscipit impedit hic. Nostrum ad cupiditate distinctio beatae architecto porro consequatur accusamus eligendi dolor corrupti dolorum, pariatur ab, esse eos quisquam qui eaque commodi quae totam, facilis rem fugiat quod ipsum quasi. Distinctio, vitae vero praesentium eos vel maiores necessitatibus asperiores numquam architecto. Commodi consequuntur accusantium optio architecto quaerat unde temporibus neque esse sint, consectetur dolor ut quasi hic culpa? Commodi, fugit? Voluptatibus, incidunt ut iste, corporis voluptatum consequatur debitis blanditiis rerum error delectus exercitationem? Odio dicta, quis iure eveniet sit magni suscipit voluptatem sunt facilis, similique voluptates, totam sequi libero ipsam nobis consequatur cum odit asperiores aperiam illo sed cupiditate quibusdam. Vero pariatur ipsum atque sed rerum quaerat excepturi! Ducimus quisquam repudiandae, cumque nisi blanditiis commodi deleniti quia autem expedita provident unde praesentium vero vitae recusandae sapiente maiores ipsum incidunt consequatur itaque odit laudantium aperiam dolorum.',
        //     'category_id' => 2,
        //     'user_id' => 2 
        // ]);
    }
}
