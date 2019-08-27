<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::connection('pgsql')->table('prole')->get()->count() == 0){

            DB::connection('pgsql')->table('prole')->insert(
                [
                    'id'=>1,
                    'role_name' =>'SuperAdmin',
                     'slug' => 'super-admin',
                ]   
            );
            DB::connection('pgsql')->table('prole')->insert(
                [
                    'id'=>2,
                    'role_name' =>'Admininstrator',
                    'slug' => 'admin',
                ] 
            );
            DB::connection('pgsql')->table('prole')->insert(
                [
                    'id'=>3,
                    'role_name' =>'company',
                    'slug' => 'company',
                ]
            );
            DB::connection('pgsql')->table('prole')->insert(
                [
                    'id'=>4,
                    'role_name' =>'employee',
                    'slug' => 'employee',
                ]
            );
        }else{
            echo "\e[31mTable is not empty, therefore NOT "; 
        }
    }
}
