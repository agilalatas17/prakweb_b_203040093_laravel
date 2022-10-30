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
        

        // User::create([
        //     'name' => 'Agil Alatas',
        //     'email' => '203040093@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Agung Adinda',
        //     'email' => '203010009@mail.unpas.ac.id',
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
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, omnis!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum quia quibusdam exercitationem eligendi magni corporis deleniti nobis saepe. Debitis deserunt ex dolorum ad quas. Nulla totam, exercitationem asperiores officiis ab deleniti iure ipsam accusamus repudiandae minus fuga facilis voluptatum.</p><p>Odio hic vel provident commodi ipsa quidem mollitia. Porro dicta dolorem nostrum est ducimus quaerat. Est id eveniet quasi unde vitae voluptate earum maxime porro odio ratione reiciendis incidunt atque, saepe eaque eius suscipit eligendi fugiat corrupti nostrum, sunt reprehenderit, eum optio.</p><p>Eveniet omnis doloribus voluptatum ipsum! Quas eveniet non fugiat sequi tempore odit possimus dignissimos, qui iste sed! Cum, beatae totam? Reprehenderit voluptatum expedita esse nam, rerum in odit pariatur, et non exercitationem repellat similique accusamus, iusto unde fugiat.</p><p>Delectus vel consequuntur atque omnis placeat a illo, accusamus, quidem cupiditate iusto aut. Cum ea nemo harum quod quae! Culpa dolorum quam unde eos deleniti facere pariatur earum ipsum veniam modi!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, omnis!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum quia quibusdam exercitationem eligendi magni corporis deleniti nobis saepe. Debitis deserunt ex dolorum ad quas. Nulla totam, exercitationem asperiores officiis ab deleniti iure ipsam accusamus repudiandae minus fuga facilis voluptatum.</p><p>Odio hic vel provident commodi ipsa quidem mollitia. Porro dicta dolorem nostrum est ducimus quaerat. Est id eveniet quasi unde vitae voluptate earum maxime porro odio ratione reiciendis incidunt atque, saepe eaque eius suscipit eligendi fugiat corrupti nostrum, sunt reprehenderit, eum optio.</p><p>Eveniet omnis doloribus voluptatum ipsum! Quas eveniet non fugiat sequi tempore odit possimus dignissimos, qui iste sed! Cum, beatae totam? Reprehenderit voluptatum expedita esse nam, rerum in odit pariatur, et non exercitationem repellat similique accusamus, iusto unde fugiat.</p><p>Delectus vel consequuntur atque omnis placeat a illo, accusamus, quidem cupiditate iusto aut. Cum ea nemo harum quod quae! Culpa dolorum quam unde eos deleniti facere pariatur earum ipsum veniam modi!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, omnis!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum quia quibusdam exercitationem eligendi magni corporis deleniti nobis saepe. Debitis deserunt ex dolorum ad quas. Nulla totam, exercitationem asperiores officiis ab deleniti iure ipsam accusamus repudiandae minus fuga facilis voluptatum.</p><p>Odio hic vel provident commodi ipsa quidem mollitia. Porro dicta dolorem nostrum est ducimus quaerat. Est id eveniet quasi unde vitae voluptate earum maxime porro odio ratione reiciendis incidunt atque, saepe eaque eius suscipit eligendi fugiat corrupti nostrum, sunt reprehenderit, eum optio.</p><p>Eveniet omnis doloribus voluptatum ipsum! Quas eveniet non fugiat sequi tempore odit possimus dignissimos, qui iste sed! Cum, beatae totam? Reprehenderit voluptatum expedita esse nam, rerum in odit pariatur, et non exercitationem repellat similique accusamus, iusto unde fugiat.</p><p>Delectus vel consequuntur atque omnis placeat a illo, accusamus, quidem cupiditate iusto aut. Cum ea nemo harum quod quae! Culpa dolorum quam unde eos deleniti facere pariatur earum ipsum veniam modi!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, omnis!',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum quia quibusdam exercitationem eligendi magni corporis deleniti nobis saepe. Debitis deserunt ex dolorum ad quas. Nulla totam, exercitationem asperiores officiis ab deleniti iure ipsam accusamus repudiandae minus fuga facilis voluptatum.</p><p>Odio hic vel provident commodi ipsa quidem mollitia. Porro dicta dolorem nostrum est ducimus quaerat. Est id eveniet quasi unde vitae voluptate earum maxime porro odio ratione reiciendis incidunt atque, saepe eaque eius suscipit eligendi fugiat corrupti nostrum, sunt reprehenderit, eum optio.</p><p>Eveniet omnis doloribus voluptatum ipsum! Quas eveniet non fugiat sequi tempore odit possimus dignissimos, qui iste sed! Cum, beatae totam? Reprehenderit voluptatum expedita esse nam, rerum in odit pariatur, et non exercitationem repellat similique accusamus, iusto unde fugiat.</p><p>Delectus vel consequuntur atque omnis placeat a illo, accusamus, quidem cupiditate iusto aut. Cum ea nemo harum quod quae! Culpa dolorum quam unde eos deleniti facere pariatur earum ipsum veniam modi!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}