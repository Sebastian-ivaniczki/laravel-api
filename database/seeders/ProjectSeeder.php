<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->sentence(4);
            $newProject->content = $faker->text(500);
            //$newProject->image = $faker->randomElement(['https://picsum.photos/300/500', 'https://picsum.photos/300/500', 'https://picsum.photos/300/500', 'https://picsum.photos/300/500']);
            $newProject->slug = Str::slug($newProject->title, '-');
            $newProject->save();
        }
    }
}
