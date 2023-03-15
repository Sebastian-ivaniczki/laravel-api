<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologys = ['HTML', 'CSS', 'Javascript', 'Vue', 'Vite', 'Scss', 'PhP', 'Laravel'];

        foreach ($technologys as $technology) {
            $type = new Technology();
            $type->label =  $technology;
            $type->save();
        }
    }
}
