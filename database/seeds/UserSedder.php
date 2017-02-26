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
            'id' => '1',
            'email'=>'rabin@gmail.com',
            'password'=>bcrypt('test123'),
            'first_name'=>'rabin',
            'last_name'=>'senchuri'
        ]);
        $role=  DB::table('role_users')->insert(
            [

                'user_id'=>'1',
                'role_id'=>'1'
            ]
        );
        $role=  DB::table('activations')->insert(
            [
                'id' => '1',
                'user_id'=>'1',
                'code'=>'sYvx3H5FerVwn3irLBOU5YuHY0y6LcFJ',
                'completed' => '1',
            ]
        );
    }
}
