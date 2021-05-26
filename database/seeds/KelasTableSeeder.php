<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'id' => '1',
            'nama_kelas' => 'XII TKJ 1',
            'deskripsi' => 'Kelas 12 Teknik Komputer dan Jaringan 1',
        ]);

        DB::table('kelas')->insert([
            'id' => '2',
            'nama_kelas' => 'XII TKJ 2',
            'deskripsi' => 'Kelas 12 Teknik Komputer dan Jaringan 2',
        ]);

        DB::table('kelas')->insert([
            'id' => '3',
            'nama_kelas' => 'XII TKJ 3',
            'deskripsi' => 'Kelas 12 Teknik Komputer dan Jaringan 3',
        ]);
    }
}

?>
