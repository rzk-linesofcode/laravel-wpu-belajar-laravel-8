<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
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
        //\App\Models\User::factory(5)->create();

        // User::create([
        //     'name' => 'Rezky',
        //     'email' => 'rzk84.rezky@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Andi',
        //     'email' => 'andi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio cupiditate eum assumenda minima molestiae obcaecati accusantium, velit fugit autem natus provident aliquid culpa accusamus doloribus labore architecto quaerat atque ea, porro magnam necessitatibus?</p> <p>Distinctio tempora soluta deleniti aperiam nemo quidem eaque sed sunt, ducimus repellat consequatur neque culpa officiis minima! Modi earum culpa eum provident voluptatibus deserunt, eius at natus corrupti sed quam, vitae consequatur impedit quisquam expedita soluta obcaecati? Debitis repellat vel molestias numquam soluta autem veniam est quo voluptatem, qui ab iusto labore, cumque accusamus enim optio? Eveniet natus similique quae pariatur alias fugiat veritatis, esse quod doloremque!?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Nesciunt hic natus laborum temporibus suscipit voluptates quae rerum! Dignissimos culpa quia sit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt hic natus laborum temporibus suscipit voluptates quae rerum! Dignissimos culpa quia sit, possimus esse sunt veniam. Tenetur deleniti veniam voluptatem accusantium dolorem eveniet nam velit illum eligendi, deserunt nisi error porro eius impedit explicabo sapiente soluta asperiores minima iste quibusdam laborum a aperiam quam corrupti. Iure ullam dolorem quo, iste omnis quae deleniti nisi, eveniet quos aspernatur nam excepturi, laudantium recusandae et veniam voluptatem voluptatum! Similique dolore temporibus magnam maiores. Maxime, consequuntur est atque incidunt nisi labore similique accusantium facilis accusamus? Atque quos deserunt quisquam quam voluptas officiis dolore, ducimus eum! </p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora laudantium accusantium alias est sapiente sunt minima, sed possimus dolore consectetur.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Perferendis rem molestiae nobis accusantium. Laudantium saepe expedita nemo explicabo suscipit beatae',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid alias vel eveniet reprehenderit corporis! Quidem ratione incidunt nemo nihil repellendus voluptate officia natus quod maiores. Perferendis rem molestiae nobis accusantium. Laudantium saepe expedita nemo explicabo suscipit beatae, tempore voluptatibus magni tempora! Excepturi magnam nam, veniam ratione similique sed ducimus quod reiciendis saepe aut perferendis unde voluptatibus accusamus.</p> <p>Molestiae, quibusdam minus ipsum aliquam rerum eos quod? Dicta, deleniti aspernatur ullam quo officia tenetur magnam reiciendis libero dolores inventore. Nobis mollitia officia, perspiciatis magni corporis minima molestias ducimus sequi harum. Sunt illo doloremque nulla harum cupiditate assumenda repellat ab dolore, neque laborum architecto nam, totam iure incidunt velit vel tempore dolorem consequuntur asperiores mollitia voluptatibus quasi necessitatibus veniam laudantium! Id, consequuntur perferendis.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Perferendis rem molestiae nobis accusantium. Laudantium saepe expedita nemo explicabo suscipit beatae',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, ullam non quia quisquam delectus, perferendis qui, quidem odio quas ea eum natus dicta. Totam quo sequi corporis laborum, placeat deleniti fuga, rerum, reprehenderit aliquam saepe impedit at quia itaque iste incidunt labore a adipisci aut harum nesciunt temporibus asperiores expedita quae. Quis, minima nobis harum dolore hic, mollitia unde quidem consequuntur maxime porro officiis quos fugit </p> <p> Nam iure voluptas minus maxime corrupti amet provident beatae ex Commodi quis fugit maiores ducimus nemo, aliquam soluta nulla temporibus ratione, tenetur quo dignissimos delectus consequuntur sint voluptates dicta neque rerum, quidem aperiam quae expedita voluptatum deleniti nam. Facilis, tenetur consequuntur. Iste voluptates placeat aut. Aperiam dignissimos quam quasi possimus ex sequi rem voluptate </p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Kelima',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-kelima',
        //     'excerpt' => 'Possimus dolor animi nulla accusamus, quod blanditiis fugiat unde nemo corporis eaque aut sunt',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dolor animi nulla accusamus, quod blanditiis fugiat unde nemo corporis eaque aut sunt, minima odio. Et iusto voluptatum a? Dolore, quis libero. Ullam laboriosam, facere, fugiat aspernatur vero inventore maxime cum iusto eveniet dolorem dolores? Consectetur, eligendi illo! Necessitatibus, laboriosam provident nulla adipisci quisquam iure ab voluptatibus facere odit. Doloribus cum unde illo libero id, asperiores maiores sed nostrum neque blanditiis rerum minima sapiente totam aspernatur dolor sequi numquam itaque ad aliquam quasi facere accusamus molestias! Pariatur quidem libero, consequuntur similique nobis, deserunt beatae odio labore rerum, delectus eos reprehenderit placeat.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptatibus earum fugit eum porro unde totam, possimus molestiae. Deserunt, non?</p>'
        // ]);
    }
}
