<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user= User::create([
            'email'=>'rabin@gmail.com',
            'password'=>bcrypt('test123'),
            'first_name'=>'rabin',
            'last_name'=>'senchuri'
        ]);
        $role=  DB::table('roles_user')->insert(
            [
              'user_id'=>'1',
                'role_id'=>'1'
            ]


        );
    }
}
