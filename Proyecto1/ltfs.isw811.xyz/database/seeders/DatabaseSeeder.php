<?php

namespace Database\Seeders;

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
        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = User::factory()->create();

         $heroes = category::create([
            'name' => 'Heroes',
            'slug' => 'heroes'
         ]);

         $villanos = category::create([
            'name' => 'Villanos',
            'slug' => 'villanos'
         ]);

         $antiheroes = category::create([
            'name' => 'Antiheroes',
            'slug' => 'antiheroes'
         ]);

         Post::create([
            'user_id' => $user->id,
            'category_id' => $heroes->id,
            'title' => 'Barry Allen',
            'slug' => 'barry-allen',
            'excerpt' => '<p>flash</p>',
            'body' => '<p>Flash es el nombre de varios superhéroes ficticios que aparecen en los cómics estadounidenses publicados por DC Comics. Creado por el escritor Gardner Fox y el artista Harry Lampert, el "Flash" original apareció por primera vez en Flash Comics #1</p>',
         ]);

         Post::create([
            'user_id' => $user->id,
            'category_id' => $antiheroes->id,
            'title' => 'Wade Wilson',
            'slug' => 'wade-wilson',
            'excerpt' => '<p>deadpool</p>',
            'body' => '<p>Wade Winston Wilson, más conocido como Deadpool, es un personaje ficticio, mercenario, supervillano y antihéroe, que aparece en los cómics publicados por Marvel Comics. Creado por el artista Rob Liefeld y el escritor Fabian Nicieza, Deadpool apareció por primera vez en New Mutants #98</p>',
         ]);

         Post::create([
            'user_id' => $user->id,
            'category_id' => $villanos->id,
            'title' => 'Victor Von doom',
            'slug' => 'victor-von-doom',
            'excerpt' => '<p>DR Doom</p>',
            'body' => '<p>l Doctor Doom es un supervillano ficticio que aparece en los cómics estadounidenses publicados por Marvel Comics. Creado por el escritor y editor Stan Lee y el artista/cocreador Jack Kirby en la Edad de Plata de los cómics el personaje hizo su debut en The Fantastic Four #5.</p>',
         ]);
    }
}
