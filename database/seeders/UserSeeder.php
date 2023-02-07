<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'nama_petugas' => 'admin',
                'username'     => 'admin',
                'password'     => bcrypt('admin'),
                'level'        => 'admin'
            ],
            [
                'nama_petugas' => 'petugas',
                'username'     => 'petugas',
                'password'     => bcrypt('petugas'),
                'level'        => 'petugas'
            ]
            ];
        foreach ($users as $key => $value) {
            user::create($value);
    }
}
    }