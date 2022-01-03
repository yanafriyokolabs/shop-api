<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('categories')->insert([
            'name' => 'buku binatang',
            'slug' => 'buku-binatang',
            'image' => 'nine.jpg',
            'status' => 'PUBLISH',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'buku resep',
            'slug' => 'buku-resep',
            'image' => 'nine.jpg',
            'status' => 'PUBLISH',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'buku matematika',
            'slug' => 'buku-matematika',
            'image' => 'nine.jpg',
            'status' => 'PUBLISH',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'buku olah raga',
            'slug' => 'buku-olah-raga',
            'image' => 'nine.jpg',
            'status' => 'PUBLISH',
            'created_at' => Carbon::now(),
        ]);
    }
}
