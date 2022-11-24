<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
        

        // User :: create([
        //     'name'=>'Ahmad Rozan',
        //     'email'=>'ahmdrzan@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);
        // User :: create([
        //     'name'=>'Gueseed',
        //     'email'=>'gueseed@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);
        User::factory(3)->create();

        Category :: create([
            'name' => 'Web Progaming',
            'slug' => 'web-progaming'
        ]);
        Category :: create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category :: create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();

        // Post :: create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natusLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus? Eligendi enim totam perferendis aperiam, aliquam exercitationem placeat, est vel tempora ab perspiciatis dolorem nemo consequatur dicta quam delectus vero? Sunt deleniti vitae earum et molestias architecto aperiam sit natus nihil. Nulla, autem ab deleniti laborum tempore ex facilis, debitis ullam molestias et numquam asperiores, eligendi vel. Nam, illo. Fuga quos totam maxime odio saepe quisquam suscipit iure in excepturi non. Itaque tempore iure vero iste dicta amet nam rem nostrum animi voluptas labore ',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post :: create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natusLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus? Eligendi enim totam perferendis aperiam, aliquam exercitationem placeat, est vel tempora ab perspiciatis dolorem nemo consequatur dicta quam delectus vero? Sunt deleniti vitae earum et molestias architecto aperiam sit natus nihil. Nulla, autem ab deleniti laborum tempore ex facilis, debitis ullam molestias et numquam asperiores, eligendi vel. Nam, illo. Fuga quos totam maxime odio saepe quisquam suscipit iure in excepturi non. Itaque tempore iure vero iste dicta amet nam rem nostrum animi voluptas labore ',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post :: create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natusLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus? Eligendi enim totam perferendis aperiam, aliquam exercitationem placeat, est vel tempora ab perspiciatis dolorem nemo consequatur dicta quam delectus vero? Sunt deleniti vitae earum et molestias architecto aperiam sit natus nihil. Nulla, autem ab deleniti laborum tempore ex facilis, debitis ullam molestias et numquam asperiores, eligendi vel. Nam, illo. Fuga quos totam maxime odio saepe quisquam suscipit iure in excepturi non. Itaque tempore iure vero iste dicta amet nam rem nostrum animi voluptas labore ',
        //     'category_id' => 2,
        //     'user_id' =>1
        // ]);
        // Post :: create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natusLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sit ut perspiciatis, quod quasi natus? Eligendi enim totam perferendis aperiam, aliquam exercitationem placeat, est vel tempora ab perspiciatis dolorem nemo consequatur dicta quam delectus vero? Sunt deleniti vitae earum et molestias architecto aperiam sit natus nihil. Nulla, autem ab deleniti laborum tempore ex facilis, debitis ullam molestias et numquam asperiores, eligendi vel. Nam, illo. Fuga quos totam maxime odio saepe quisquam suscipit iure in excepturi non. Itaque tempore iure vero iste dicta amet nam rem nostrum animi voluptas labore ',
        //     'category_id' => 2,
        //     'user_id' =>2
        // ]);
    }
}
