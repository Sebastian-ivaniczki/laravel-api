<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Front End', 'Back End', 'app', 'Website'];

        foreach ($categories as $categorie) {
            $type = new Type();
            $type->label =  $categorie;
            $type->save();
        }
    }
}
