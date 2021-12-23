<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ekky',
            'username' => 'ekky99',
            'email' => 'ekky99@gmail.com',
            'password' => bcrypt('123')
        ]);

       User::factory(3)->create();

       Category::create([
           'name' => 'Web Programming',
           'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);

        Post::factory(20)->create();


        // User::create([
        //     'name' => 'Sukma',
        //     'email' => 'sukmawati@gmail.com',
        //     'password' => bcrypt('123')

        // ]);
        // Post::create([
            //     'title' =>'Judul 7',
            //     'slug' => 'judul_post_7',
            //     'excerpt' => '<p>Lorem ipsum dolor sit amet2 1 1 n7 consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat 4',
        //     'body' => '</p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis.<p> Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis. Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' =>'Judul 8',
        //     'slug' => 'judul_post_8',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet2 1 2 n7 consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat 4',
        //     'body' => '</p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis.<p> Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis. Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' =>'Judul 9',
        //     'slug' => 'judul_post_9',
        //     'excerpt' => '<p>Lorem ipsum dolor sit 9amet2 1 2 n7 consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat 4',
        //     'body' => '</p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis.<p> Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis. Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' =>'Judul 10',
        //     'slug' => 'judul_post_10',
        //     'excerpt' => '<p>Lorem ipsum dolor 10sit 9amet2 1 2 n7 consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat 4',
        //     'body' => '</p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis.<p> Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis. Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' =>'Judul 11',
        //     'slug' => 'judul_post_11',
        //     'excerpt' => '<p>Lorem ipsum dolor 10sit 9amet2 1 112 n7 consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat 4',
        //     'body' => '</p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis.<p> Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda fugiat expedita illum odio, dolorum eum tempora possimus impedit labore minus! Voluptatem quaerat aspernatur molestiae rem, fuga iure dolorem, repellendus ullam corporis odit natus quas vel ipsam expedita et sint laudantium ab! Odit sit doloribus quo labore expedita ipsa totam itaque ea amet quisquam voluptates, nostrum possimus quaerat omnis. Consequuntur sit amet harum nulla dolorem nesciunt odit quam officiis eaque unde temporibus, molestiae eum molestias at id, earum tempore numquam! Aperiam necessitatibus nemo fuga illo sit, cupiditate rerum autem id molestiae. Sint sapiente quisquam voluptatem eaque? Laboriosam hic autem dolorum illum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}
