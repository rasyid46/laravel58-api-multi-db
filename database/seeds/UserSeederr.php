<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeederr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::connection('pgsql')->table('user')->get()->count() == 0){

            $insertArray =['phone' => '123', 'first_name' => 'andi','last_name' =>'rosadi','address'=>'kopo','born_place'=>'Bandung','born_date'=>'1992-07-17','npwp'=>'123'];
            $insertid = DB::collection('muser')->insertGetId($insertArray);
         
        
            DB::connection('pgsql')->table('user')->insert(
                [
                    'id'=>1,
                    'username'=>'sa',
                    'email' =>'super@admin.com',
                    'password' => Hash::make('admin1234!'),
                    'role_id' => '1',
                    '_iduser' => $insertid
                ]   
            );
        }
    }
}
