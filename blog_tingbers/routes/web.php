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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title" => "About",
    "name" => "Yosep Doni Saputra",
    "email" => "yosepdoni2905@gmail.com",
    "image" => "yosep.jpg"
    ]

);
});



Route::get('/blog', function(){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=> "judul-post-pertama",
            "author" => "Yosep Doni Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni rerum omnis vel quo nihil saepe accusamus natus fugiat
            neque? Cupiditate illo quod accusantium, iste sed temporibus minima blanditiis neque nostrum, quidem, accusamus sequi
            explicabo deserunt? Ad ducimus deleniti dolor quos officiis iure unde eligendi earum ipsum in, officia id modi odit
            nisi, repudiandae laboriosam iusto quisquam et dolorem aliquid dolorum accusantium? Error neque iusto harum labore aut,
            debitis deleniti aliquam, quam eveniet, quos nulla nisi optio voluptatibus nemo. Quos, tempore!",
        ],

        [
            "title" => "Judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author" => "Paman Bowok",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni rerum omnis vel quo nihil saepe accusamus natus fugiat
            neque? Cupiditate illo quod accusantium, iste sed temporibus minima blanditiis neque nostrum, quidem, accusamus sequi
            explicabo deserunt? Ad ducimus deleniti dolor quos officiis iure unde eligendi earum ipsum in, officia id modi odit
            nisi, repudiandae laboriosam iusto quisquam et dolorem aliquid dolorum accusantium? Error neque iusto harum labore aut,
            debitis deleniti aliquam, quam eveniet, quos nulla nisi optio voluptatibus nemo. Quos, tempore!",
        ],
    ];
    return view ('posts',[
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"=> "judul-post-pertama",
            "author" => "Yosep Doni Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, quam! Maiores quasi, consequuntur reiciendis unde
            voluptates obcaecati aperiam, incidunt quos maxime deserunt eum eligendi facilis nemo sequi cum. Veniam quam ad
            voluptatum cupiditate harum similique maiores corporis amet qui aliquam quae quasi, distinctio voluptate! Maiores, quod
            ab consectetur autem atque est, nihil repellendus vitae illo itaque, nesciunt magnam provident accusantium dignissimos?
            Tempora et cupiditate, labore officia rerum ut doloremque, accusamus id dolor autem numquam tempore deleniti illum!
            Dolorem adipisci ipsum maiores eaque sint fugiat tempore blanditiis. Earum illum mollitia cum. Dolor esse cupiditate ab
            similique quam omnis deserunt laborum aliquid. Repellat voluptates enim ad possimus molestias laboriosam iste sit
            consectetur, voluptatem laudantium consequuntur eligendi saepe quia est ab quam? Culpa modi ab debitis quaerat nisi
            doloremque quis? Officiis, laboriosam ratione sunt facilis assumenda qui quisquam voluptatem iste at dignissimos, ullam
            quas mollitia corrupti sed rem atque ipsam culpa laudantium facere minus, cumque dolores reprehenderit adipisci modi? Et
            blanditiis modi fuga eius iusto enim quam nemo cum ipsam corporis dolor, at omnis pariatur voluptate nostrum.
            Perferendis itaque voluptatibus natus laboriosam aliquid ipsa molestias iste est soluta debitis expedita deleniti
            aspernatur cupiditate quae maiores, tempore cum perspiciatis quam reprehenderit. Velit, ipsum laudantium!",
        ],

        [
            "title" => "Judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author" => "Paman Bowok",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni rerum omnis vel quo nihil saepe accusamus natus fugiat
            neque? Cupiditate illo quod accusantium, iste sed temporibus minima blanditiis neque nostrum, quidem, accusamus sequi
            explicabo deserunt? Ad ducimus deleniti dolor quos officiis iure unde eligendi earum ipsum in, officia id modi odit
            nisi, repudiandae laboriosam iusto quisquam et dolorem aliquid dolorum accusantium? Error neque iusto harum labore aut,
            debitis deleniti aliquam, quam eveniet, quos nulla nisi optio voluptatibus nemo. Quos, tempore!",
        ],
    ];

    $new_post = [''];
    foreach ($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "Single_Post",
        "post" => $new_post
    ]);
});
