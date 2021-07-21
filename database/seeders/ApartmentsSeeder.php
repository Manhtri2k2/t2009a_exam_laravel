<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker\Factory::create();
        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('apartments')->insert([
                'tenChungCu' => $fake->name,
                'diaChi' => $fake->address,
                'giaBan' => $fake->numerify($string = '###'),
                'thongTinChung' => $fake->sentence(500),
                'thongTinChiTiet' => $fake->sentence,
                'hinhDaiDien' => $fake->imageUrl($width = 100, $height = 200),
                'trangThai' => $fake->numerify($string = '##')
            ]);
        }
    }
}
