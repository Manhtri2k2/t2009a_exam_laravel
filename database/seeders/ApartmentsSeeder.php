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
        $tableName = 'apartments';
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table($tableName)->truncate();

        \Illuminate\Support\Facades\DB::table($tableName)->insert([
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '1',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '2',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '3',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '4',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '5',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '6',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '7',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '8',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '9',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '10',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '11',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '12',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '13',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '14',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '15',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '16',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '17',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '18',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '19',
            ],
            [
                'tenChungCu' => 'Home 1',
                'diaChi' => 'Block 1',
                'giaBan' => 10000,
                'thongTinChung' => 'Luxury apartments',
                'thongTinChiTiet' => 'Luxury apartments at block 1',
                'hinhDaiDien' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'trangThai' => '20',
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
