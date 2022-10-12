<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name'       => 'admin',
            'email'      => 'admin@admin.pt',
            'password'   => bcrypt('12345678'),
            'is_admin'   => '1'
        ]);

    }
}
