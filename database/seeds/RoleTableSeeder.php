<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'slug' => 'admin',
                'name' => 'ADMIN',
            ]


        );

        DB::table('roles')->insert(
            [
                'slug' => 'project_manager',
                'name' => 'PROJECT_MANAGER',
            ]
        );
        DB::table('roles')->insert(
            [
                'slug' => 'stock_holder',
                'name' => 'STOCK_HOLDER',
            ]
        );
    }
}
