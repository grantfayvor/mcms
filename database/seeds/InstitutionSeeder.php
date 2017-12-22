<?php

use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([[
            'id' => 1,
            'name' => 'University of Lagos',
            'logo_location' => 'img/logos/Unilag.png',
            'skin' => 'skin-1'
        ], [
            'id' => 2,
            'name' => 'University of Abuja',
            'logo_location' => 'img/logos/Uniabj.png',
            'skin' => 'skin-2'
        ], [
            'id' => 3,
            'name' => 'University of Nigeria Nsukka',
            'logo_location' => 'img/logos/UNN.jpg',
            'skin' => 'skin-3'
        ], [
            'id' => 4,
            'name' => 'University of Ibadan',
            'logo_location' => 'img/logos/UI.jpg',
            'skin' => 'skin-1'
        ], [
            'id' => 5,
            'name' => 'Ahmadu Bello University Zaria',
            'logo_location' => 'img/logos/ABU.png',
            'skin' => 'skin-2'
        ], [
            'id' => 6,
            'name' => 'Federal University of Technology Owerri',
            'logo_location' => 'img/logos/FUTO.jpg',
            'skin' => 'skin-3'
        ], [
            'id' => 7,
            'name' => 'Obafemi Awolowo University',
            'logo_location' => 'img/logos/OAU.jpg',
            'skin' => 'skin-1'
        ]]);
    }
}
