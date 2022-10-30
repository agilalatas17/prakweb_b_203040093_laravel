<?php

namespace App\Models;


class Post {
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agil Alatas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cupiditate natus vero ullam voluptatum officia temporibus odit eligendi nulla voluptates mollitia deleniti dolor praesentium, quis unde fuga. Eum tempore nulla officia inventore dolor minus id? Tenetur molestias fuga sint molestiae et iste placeat velit iure reiciendis. Voluptate est quisquam, nostrum vitae veniam sequi. Sequi iure fugit cupiditate debitis ipsum fugiat quaerat magni totam sed veniam ratione tenetur ut beatae saepe deleniti impedit quam, expedita natus soluta! Quas sunt iste hic aliquam quidem modi nostrum ipsum et distinctio explicabo tenetur quaerat blanditiis consequuntur rem, vel atque quia laboriosam? Ea, repudiandae sit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adam Maulana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores impedit accusantium repellat totam natus voluptatem esse, eos quod, facilis aliquam provident neque, sapiente illum voluptatibus! Odio fugit est eveniet vitae voluptate labore suscipit vero deserunt atque! Esse autem expedita nemo ipsam aut? Id necessitatibus accusamus perspiciatis natus officiis blanditiis dicta quam voluptate placeat delectus molestias dolorem ab maxime harum fugiat a eligendi ratione iusto numquam, porro non rerum. Qui quibusdam iure nostrum, at, voluptatibus quaerat soluta perferendis porro ad error repellendus magnam optio. Corrupti illo impedit itaque quam facere ipsum vel sit accusamus vero totam fugiat iure officiis suscipit, laborum amet repudiandae dolore nemo doloremque quis delectus dicta ipsa incidunt. Tempore quam molestiae officiis dolor. Delectus id at in quasi nemo saepe minima assumenda. Sit necessitatibus doloribus autem vel quibusdam sequi veritatis qui hic pariatur, molestiae nihil sed ipsam voluptas quae aperiam voluptatem impedit facilis perspiciatis? Excepturi, rerum! Magnam atque a corporis pariatur odio eius cupiditate ex suscipit debitis repellat earum mollitia est, laboriosam placeat totam. Itaque ullam facilis pariatur vel officia quis, praesentium sequi quam, asperiores adipisci similique corporis nemo. Quaerat tempora facere quisquam omnis doloribus aliquid ab, minus placeat, ad molestias nesciunt libero autem? Nisi consectetur aperiam inventore."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
