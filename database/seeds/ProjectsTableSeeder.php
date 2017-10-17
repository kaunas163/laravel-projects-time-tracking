<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('projects')->truncate();

        $faker = Faker::create();
        $projects = [];

        foreach (range(1, 10) as $index)
        {
            $date = $faker->dateTime();

            $projects[] = [
                'title' => $faker->sentence(5),
                'description' => $faker->paragraph(3),
                'created_at' => $date,
                'updated_at' => $date
            ];
        }

        DB::table('projects')->insert($projects);
    }
}
