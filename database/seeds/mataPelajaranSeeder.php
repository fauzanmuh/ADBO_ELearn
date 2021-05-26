<?php

use Illuminate\Database\Seeder;

class mataPelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('mata_pelajaran')->insert([
            'id' => '1',
            'nama_mapel' => 'Jaringan Komputer',
        ]);

        DB::table('mata_pelajaran')->insert([
            'id' => '2',
            'nama_mapel' => 'Matematika',
        ]);

        DB::table('mata_pelajaran')->insert([
            'id' => '3',
            'nama_mapel' => 'Bahasa Indonesia',
        ]);

        DB::table('mata_pelajaran')->insert([
            'id' => '4',
            'nama_mapel' => 'Bahasa Inggris',
        ]);
    }
}
