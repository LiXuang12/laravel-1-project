<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "yamana",
        "email" => "ichika@neko.ska",
        "img" => "wallpaperflare.com_wallpaper(2).jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Ishana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et minus voluptatum libero 
            sint ratione nesciunt officia debitis quidem, praesentium impedit reiciendis accusantium! 
            Culpa recusandae neque sequi eum consequuntur. Minus obcaecati veniam modi alias, id perferendis 
            at, consequuntur rerum voluptatem, sunt quod excepturi soluta illo enim totam earum nulla reprehenderit 
            ipsam eaque quidem aspernatur iure? Quibusdam quam enim odio soluta adipisci porro placeat? Et laudantium, 
            officia tempore consequatur libero minus quo neque consectetur. Facere, ad non accusantium vel alias error possimus.
            ",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Robert",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et minus voluptatum libero 
            sint ratione nesciunt officia debitis quidem, praesentium impedit reiciendis accusantium! 
            Culpa recusandae neque sequi eum consequuntur. Minus obcaecati veniam modi alias, id perferendis 
            at, consequuntur rerum voluptatem, sunt quod excepturi soluta illo enim totam earum nulla reprehenderit 
            ipsam eaque quidem aspernatur iure? Quibusdam quam enim odio soluta adipisci porro placeat? Et laudantium, 
            officia tempore consequatur libero minus quo neque consectetur. Facere, ad non accusantium vel alias error possimus.
            ",
        ]
        ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

//single posts section

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Ishana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et minus voluptatum libero 
            sint ratione nesciunt officia debitis quidem, praesentium impedit reiciendis accusantium! 
            Culpa recusandae neque sequi eum consequuntur. Minus obcaecati veniam modi alias, id perferendis 
            at, consequuntur rerum voluptatem, sunt quod excepturi soluta illo enim totam earum nulla reprehenderit 
            ipsam eaque quidem aspernatur iure? Quibusdam quam enim odio soluta adipisci porro placeat? Et laudantium, 
            officia tempore consequatur libero minus quo neque consectetur. Facere, ad non accusantium vel alias error possimus.
            ",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Robert",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et minus voluptatum libero 
            sint ratione nesciunt officia debitis quidem, praesentium impedit reiciendis accusantium! 
            Culpa recusandae neque sequi eum consequuntur. Minus obcaecati veniam modi alias, id perferendis 
            at, consequuntur rerum voluptatem, sunt quod excepturi soluta illo enim totam earum nulla reprehenderit 
            ipsam eaque quidem aspernatur iure? Quibusdam quam enim odio soluta adipisci porro placeat? Et laudantium, 
            officia tempore consequatur libero minus quo neque consectetur. Facere, ad non accusantium vel alias error possimus.
            ",
        ]
        ];
        $new_post = [];
        foreach ($blog_posts as $post) {
            if ($post["slug"] === $slug) {
                $new_post = $post;
            }
        }
    return view('post', [
        "title" => "single post",
        "post" => $new_post,

    ]);
});