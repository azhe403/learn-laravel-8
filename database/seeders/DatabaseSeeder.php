<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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

        //        User::create([
        //            'name' => 'Azhe-kun',
        //            'email' => 'admin@azhe.space',
        //            'password' => bcrypt(12345)
        //        ]);
        //
        //        User::create([
        //            'name' => 'Fulan',
        //            'email' => 'fulan@azhe.space',
        //            'password' => bcrypt(12345)
        //        ]);

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

//        Post::create([
//            'title' => 'Judul pertama',
//            'slug' => 'judul-pertama',
//            'category_id' => 1,
//            'user_id' => 1,
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque culpa ducimus esse iusto nesciunt quod rem sapiente temporibus voluptatem.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores consequatur dignissimos et in magnam minima, modi nemo numquam officiis placeat quidem quisquam quod totam voluptatibus. Aperiam, assumenda, doloribus ea fugiat hic magnam, minus nihil perspiciatis quam sed sint tempore voluptate voluptatibus? Ab aliquam aliquid amet aspernatur consequatur cumque dolor ducimus eius fuga in magni minima mollitia nemo nesciunt officiis pariatur praesentium, quas quisquam quod, ratione reiciendis rem sed velit veritatis vero vitae, voluptas voluptatum. A aliquid amet atque aut autem blanditiis deleniti dignissimos, distinctio dolore dolorem dolorum eveniet ex hic, ipsam iure labore, maxime minus mollitia nulla odio officia optio quia quibusdam quisquam ratione saepe soluta sunt tenetur ut voluptatem. Amet at consectetur, consequatur debitis dicta eos, explicabo illo itaque laboriosam modi omnis perferendis porro quia quisquam reiciendis rem sapiente tempore? Earum, nostrum quisquam? Autem esse eveniet excepturi inventore necessitatibus nisi repellendus temporibus veniam! Ad animi commodi consectetur culpa dignissimos dolorem eaque eligendi eos, est facere id laudantium magnam magni nemo neque possimus quam quia quibusdam quidem quo rem repellat reprehenderit rerum soluta ut velit vero voluptas? Consequatur consequuntur deserunt distinctio doloremque eos, eveniet ipsa libero nulla officia porro quam, quis quo rerum sit unde, veritatis voluptatibus. Ratione, voluptatibus?'
//        ]);
//
//        Post::create([
//            'title' => 'Judul Kedua',
//            'slug' => 'judul-kedua',
//            'category_id' => 1,
//            'user_id' => 1,
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque culpa ducimus esse iusto nesciunt quod rem sapiente temporibus voluptatem.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores consequatur dignissimos et in magnam minima, modi nemo numquam officiis placeat quidem quisquam quod totam voluptatibus. Aperiam, assumenda, doloribus ea fugiat hic magnam, minus nihil perspiciatis quam sed sint tempore voluptate voluptatibus? Ab aliquam aliquid amet aspernatur consequatur cumque dolor ducimus eius fuga in magni minima mollitia nemo nesciunt officiis pariatur praesentium, quas quisquam quod, ratione reiciendis rem sed velit veritatis vero vitae, voluptas voluptatum. A aliquid amet atque aut autem blanditiis deleniti dignissimos, distinctio dolore dolorem dolorum eveniet ex hic, ipsam iure labore, maxime minus mollitia nulla odio officia optio quia quibusdam quisquam ratione saepe soluta sunt tenetur ut voluptatem. Amet at consectetur, consequatur debitis dicta eos, explicabo illo itaque laboriosam modi omnis perferendis porro quia quisquam reiciendis rem sapiente tempore? Earum, nostrum quisquam? Autem esse eveniet excepturi inventore necessitatibus nisi repellendus temporibus veniam! Ad animi commodi consectetur culpa dignissimos dolorem eaque eligendi eos, est facere id laudantium magnam magni nemo neque possimus quam quia quibusdam quidem quo rem repellat reprehenderit rerum soluta ut velit vero voluptas? Consequatur consequuntur deserunt distinctio doloremque eos, eveniet ipsa libero nulla officia porro quam, quis quo rerum sit unde, veritatis voluptatibus. Ratione, voluptatibus?'
//        ]);
//
//        Post::create([
//            'title' => 'Judul Ketiga',
//            'slug' => 'judul-ketiga',
//            'category_id' => 2,
//            'user_id' => 1,
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque culpa ducimus esse iusto nesciunt quod rem sapiente temporibus voluptatem.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores consequatur dignissimos et in magnam minima, modi nemo numquam officiis placeat quidem quisquam quod totam voluptatibus. Aperiam, assumenda, doloribus ea fugiat hic magnam, minus nihil perspiciatis quam sed sint tempore voluptate voluptatibus? Ab aliquam aliquid amet aspernatur consequatur cumque dolor ducimus eius fuga in magni minima mollitia nemo nesciunt officiis pariatur praesentium, quas quisquam quod, ratione reiciendis rem sed velit veritatis vero vitae, voluptas voluptatum. A aliquid amet atque aut autem blanditiis deleniti dignissimos, distinctio dolore dolorem dolorum eveniet ex hic, ipsam iure labore, maxime minus mollitia nulla odio officia optio quia quibusdam quisquam ratione saepe soluta sunt tenetur ut voluptatem. Amet at consectetur, consequatur debitis dicta eos, explicabo illo itaque laboriosam modi omnis perferendis porro quia quisquam reiciendis rem sapiente tempore? Earum, nostrum quisquam? Autem esse eveniet excepturi inventore necessitatibus nisi repellendus temporibus veniam! Ad animi commodi consectetur culpa dignissimos dolorem eaque eligendi eos, est facere id laudantium magnam magni nemo neque possimus quam quia quibusdam quidem quo rem repellat reprehenderit rerum soluta ut velit vero voluptas? Consequatur consequuntur deserunt distinctio doloremque eos, eveniet ipsa libero nulla officia porro quam, quis quo rerum sit unde, veritatis voluptatibus. Ratione, voluptatibus?'
//        ]);
//
//        Post::create([
//            'title' => 'Judul Keempat',
//            'slug' => 'judul-keempat',
//            'category_id' => 2,
//            'user_id' => 2,
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque culpa ducimus esse iusto nesciunt quod rem sapiente temporibus voluptatem.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores consequatur dignissimos et in magnam minima, modi nemo numquam officiis placeat quidem quisquam quod totam voluptatibus. Aperiam, assumenda, doloribus ea fugiat hic magnam, minus nihil perspiciatis quam sed sint tempore voluptate voluptatibus? Ab aliquam aliquid amet aspernatur consequatur cumque dolor ducimus eius fuga in magni minima mollitia nemo nesciunt officiis pariatur praesentium, quas quisquam quod, ratione reiciendis rem sed velit veritatis vero vitae, voluptas voluptatum. A aliquid amet atque aut autem blanditiis deleniti dignissimos, distinctio dolore dolorem dolorum eveniet ex hic, ipsam iure labore, maxime minus mollitia nulla odio officia optio quia quibusdam quisquam ratione saepe soluta sunt tenetur ut voluptatem. Amet at consectetur, consequatur debitis dicta eos, explicabo illo itaque laboriosam modi omnis perferendis porro quia quisquam reiciendis rem sapiente tempore? Earum, nostrum quisquam? Autem esse eveniet excepturi inventore necessitatibus nisi repellendus temporibus veniam! Ad animi commodi consectetur culpa dignissimos dolorem eaque eligendi eos, est facere id laudantium magnam magni nemo neque possimus quam quia quibusdam quidem quo rem repellat reprehenderit rerum soluta ut velit vero voluptas? Consequatur consequuntur deserunt distinctio doloremque eos, eveniet ipsa libero nulla officia porro quam, quis quo rerum sit unde, veritatis voluptatibus. Ratione, voluptatibus?'
//        ]);
    }
}
