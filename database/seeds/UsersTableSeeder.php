<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\User::firstOrCreate(['email'=>'adminseletivo@mail.com'],[
            'name'=>'Admin',
            'password'=>Hash::make('seletivo')
        ]);

        echo "Usuários criados! \n";
    }
}
