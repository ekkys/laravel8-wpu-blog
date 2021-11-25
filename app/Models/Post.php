<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [

                [
                    "title" => "Judul Post Pertama",
                    "slug" => "judul_post_pertama",
                    "author" => "Ekky Sukmawati",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati impedit reprehenderit consectetur recusandae, voluptatum fugit cupiditate illo earum, porro quibusdam. Culpa voluptatum, totam delectus odit nisi tenetur sunt iusto? Vero perspiciatis suscipit veniam aperiam voluptas qui facilis iusto totam nemo, laboriosam cum nisi, consequuntur ipsa, velit dolorum rem sapiente error mollitia tempora! Nam nostrum culpa porro, et at eveniet qui, veritatis facere voluptatem veniam voluptatum delectus blanditiis in adipisci, aspernatur molestias quidem quas odio reiciendis eos. Quam animi earum temporibus quod in! Aperiam est expedita vitae tempora repudiandae quod, ut ab doloribus sunt non cupiditate pariatur eligendi odit quibusdam."
                ],
                [
                    "title" => "Judul Ekky",
                    "author" => "Ekky Sukmawati",
                    "slug" => "judul_post_kedua",
                    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et obcaecati impedit reprehenderit consectetur recusandae, voluptatum fugit cupiditate illo earum, porro quibusdam. Culpa voluptatum, totam delectus odit nisi tenetur sunt iusto? Vero perspiciatis suscipit veniam aperiam voluptas qui facilis iusto totam nemo, laboriosam cum nisi, consequuntur ipsa, velit dolorum rem sapiente error mollitia tempora! Nam nostrum culpa porro, et at eveniet qui, veritatis facere voluptatem veniam voluptatum delectus blanditiis in adipisci, aspernatur molestias quidem quas odio reiciendis eos. Quam animi earum temporibus quod in! Aperiam est expedita vitae tempora repudiandae quod, ut ab doloribus sunt non cupiditate pariatur eligendi odit quibusdam."
                ]

            ];

            public static function all()
            {
                return collect(self::$blog_posts); // use self:: krn menggunakan properti static
            }

            public static function find($slug)
            {
                $posts = static::all(); // use static:: krn menggunakan method static

                return $posts->firstWhere('slug', $slug);

            }
}
