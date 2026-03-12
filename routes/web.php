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
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'Putra Hidayat',
        'email' => 'putrahidayat629@gmail.com',
        'image' => 'pasfoto.jpg'
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' =>'judul-pertama',
            'author' => 'Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum iure voluptatibus reiciendis voluptas? Distinctio aperiam rem magnam, cum officia est assumenda ex dolorum alias quasi omnis! Fugiat incidunt accusamus enim nemo possimus nesciunt quis nisi. Hic, nesciunt provident et veritatis nostrum dicta laudantium ducimus atque vero dolores maiores repellendus, non dignissimos doloribus eos possimus perferendis nemo expedita rerum! Quia, nostrum quas. Quis consequuntur fugit sequi repellat est aut laborum odio. Quam ab suscipit totam nisi dignissimos sapiente dolores molestias, dicta, aspernatur iste autem alias voluptates tenetur rerum, officiis labore corrupti. Unde minus deserunt accusamus nostrum facilis aspernatur libero, dolores iste.'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Jett',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium voluptatibus, expedita harum neque quod totam quaerat ea aliquid earum dolorum similique minima quidem, dolorem, autem nisi. Animi itaque necessitatibus quisquam laboriosam possimus labore pariatur enim sapiente, praesentium nisi velit, aspernatur inventore numquam nesciunt architecto illum quod perferendis optio quis culpa nihil in quia et quos. Perferendis nesciunt blanditiis culpa quos mollitia sit qui exercitationem optio fuga animi! Explicabo sequi fugit alias incidunt autem deserunt quam distinctio aut, laborum sed provident sapiente natus nam ex a ducimus vel fugiat rem saepe cumque dicta modi eum inventore? Accusamus culpa odio blanditiis sint corrupti omnis eveniet animi possimus a at. Quod est harum dignissimos inventore deleniti voluptate facere, rem adipisci magnam maxime libero. Perspiciatis voluptate tempora facilis? Mollitia ea sed eum unde est magnam voluptas deleniti, corrupti animi temporibus, quibusdam eveniet corporis laborum facere et. Facilis magni, dolorum accusamus ipsa nisi aspernatur enim perferendis, doloribus est autem nesciunt deserunt. Nisi perferendis repellendus porro earum, dolorum incidunt quod beatae pariatur molestiae fuga qui nostrum enim recusandae sapiente blanditiis molestias praesentium quam, laudantium doloribus. Ipsum odio fugiat pariatur? Vero praesentium, quos corrupti voluptatum quibusdam mollitia sit aliquam voluptates dolorum iure officiis asperiores atque quaerat deleniti.'
        ]
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' =>'judul-pertama',
            'author' => 'Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum iure voluptatibus reiciendis voluptas? Distinctio aperiam rem magnam, cum officia est assumenda ex dolorum alias quasi omnis! Fugiat incidunt accusamus enim nemo possimus nesciunt quis nisi. Hic, nesciunt provident et veritatis nostrum dicta laudantium ducimus atque vero dolores maiores repellendus, non dignissimos doloribus eos possimus perferendis nemo expedita rerum! Quia, nostrum quas. Quis consequuntur fugit sequi repellat est aut laborum odio. Quam ab suscipit totam nisi dignissimos sapiente dolores molestias, dicta, aspernatur iste autem alias voluptates tenetur rerum, officiis labore corrupti. Unde minus deserunt accusamus nostrum facilis aspernatur libero, dolores iste.'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Jett',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium voluptatibus, expedita harum neque quod totam quaerat ea aliquid earum dolorum similique minima quidem, dolorem, autem nisi. Animi itaque necessitatibus quisquam laboriosam possimus labore pariatur enim sapiente, praesentium nisi velit, aspernatur inventore numquam nesciunt architecto illum quod perferendis optio quis culpa nihil in quia et quos. Perferendis nesciunt blanditiis culpa quos mollitia sit qui exercitationem optio fuga animi! Explicabo sequi fugit alias incidunt autem deserunt quam distinctio aut, laborum sed provident sapiente natus nam ex a ducimus vel fugiat rem saepe cumque dicta modi eum inventore? Accusamus culpa odio blanditiis sint corrupti omnis eveniet animi possimus a at. Quod est harum dignissimos inventore deleniti voluptate facere, rem adipisci magnam maxime libero. Perspiciatis voluptate tempora facilis? Mollitia ea sed eum unde est magnam voluptas deleniti, corrupti animi temporibus, quibusdam eveniet corporis laborum facere et. Facilis magni, dolorum accusamus ipsa nisi aspernatur enim perferendis, doloribus est autem nesciunt deserunt. Nisi perferendis repellendus porro earum, dolorum incidunt quod beatae pariatur molestiae fuga qui nostrum enim recusandae sapiente blanditiis molestias praesentium quam, laudantium doloribus. Ipsum odio fugiat pariatur? Vero praesentium, quos corrupti voluptatum quibusdam mollitia sit aliquam voluptates dolorum iure officiis asperiores atque quaerat deleniti.'
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    if (empty($new_post)) {
        abort(404);
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);

});