<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AdditionalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $additionalinformations = [
            ['title' => "", 'panorama_id' => 1, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 2, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 3, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 4, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 5, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 6, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 7, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 8, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 9, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 10, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 11, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 12, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 13, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 14, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 15, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 16, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 17, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 18, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 19, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 20, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 21, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 22, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 23, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 24, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 25, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 26, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 27, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 28, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 29, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 30, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 31, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 32, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 33, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
        ];

        foreach ($additionalinformations as $additionalinformation) {
            DB::table('additionalinformations')->insert($additionalinformation);
        }
    }
}