<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracks')->truncate();

        $faker = Faker::create();
        $tracks = [];

        foreach (range(1, 100) as $index)
        {
            $tracks[] = [
                'project_id' => $faker->numberBetween(1, 10),
                'started_at' => $faker->dateTime(),
                'finished_at' => new DateTime,
                'comment' => $faker->sentence(3),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ];
        }

        DB::table('tracks')->insert($tracks);
    }
}
