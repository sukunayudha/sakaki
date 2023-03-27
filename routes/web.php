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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home' ,[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "about",
        "name" => "Sakaki Yudha",
        "email" => "sakakiyudha@mdh.ac.id",
        "image" => "sakaki.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sakaki Yudha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime necessitatibus maiores impedit, voluptatibus autem nesciunt quod, libero iste, id incidunt quaerat iusto aut odit vero. Quos ea, autem cum laborum ratione ut praesentium nobis consectetur assumenda illum error! Nesciunt numquam corporis quo harum aut velit dolores itaque. Rerum dolore quae quia ipsam ad unde eligendi, culpa illo, reprehenderit ipsum eaque officia, illum deleniti aspernatur molestiae distinctio. Voluptatibus, rerum! Eveniet eaque nostrum ullam ad! At quia quas maiores veritatis similique."
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-keduaa",
            "author" => "Sakaki Yudha",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fuga libero ex sapiente iure omnis itaque dolorem distinctio fugiat cum fugit magni vero non mollitia vel voluptatem iste porro reiciendis, eos consectetur qui quas! Cupiditate praesentium odit excepturi perspiciatis. Voluptatibus magni sapiente nihil doloribus, expedita repudiandae veniam fuga nam! Culpa nostrum tempore possimus animi nam non, quibusdam impedit facere nemo eveniet qui, alias quidem nobis sapiente saepe laudantium! Voluptatum ratione laboriosam, perspiciatis atque fugiat qui provident dolor ex saepe libero, nihil laudantium, mollitia enim quidem. Eius recusandae tempora quas alias quia maiores laboriosam? Voluptatum expedita ex facilis voluptates cumque numquam?"
        ],
    ];
    return view('posts' , [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
route::get('posts/{slug}', function($slug){
    return view('post' ,[
        "title" => "single post"
    ]);
});