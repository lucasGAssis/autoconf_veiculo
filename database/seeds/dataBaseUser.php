<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class dataBaseUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'          =>  'Lucas Guilherme' ,
            'email'     => 'lucas@gmail.com',
            'password'     => bcrypt('32351338'),
            'lojaId' => '1',
        ]);
    }
}
