<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([[
            'id' => 1,
            'name' => 'Family',
        ], [
            'id' => 2,
            'name' => 'Work',
        ], [
            'id' => 3,
            'name' => 'Home',
        ], [
            'id' => 4,
            'name' => 'Children',
        ], [
            'id' => 5,
            'name' => 'Holidays',
        ], [
            'id' => 6,
            'name' => 'Music',
        ], [
            'id' => 7,
            'name' => 'Photography',
        ], [
            'id' => 8,
            'name' => 'Film',
        ], [
            'id' => 9,
            'name' => 'Culture',
        ], [
            'id' => 10,
            'name' => 'Arts',
        ], [
            'id' => 11,
            'name' => 'Science',
        ], [
            'id' => 12,
            'name' => 'Business',
        ]]);
    }
}