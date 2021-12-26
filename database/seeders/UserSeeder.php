<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insertOrIgnore([

            
            [
                'id' => '10001',
                'name' => 'Admin001',
                'email' => 'admin001@phoenixgn.com',
                'username' => 'adminlevel001',
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                'status' => 'verified',
                'email_verified_at' => now(),
                'role' => 'admin',
                'track_id' => 'a',
                'usercode' => 'PN0000',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10002',
                'name' => 'Admin002',
                'email' => 'admin002@phoenixgn.com',
                'username' => 'adminlevel002',
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                'status' => 'verified',
                'email_verified_at' => now(),
                'role' => 'admin',
                'track_id' => 'b',
                'usercode' => 'PN0001',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10003',
                'name' => 'Admin003',
                'email' => 'admin003@phoenixgn.com',
                'username' => 'adminlevel003',
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                'status' => 'verified',
                'email_verified_at' => now(),
                'role' => 'admin',
                'track_id' => 'c',
                'usercode' => 'PN0002',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10009',
                'name' => 'Sample User',
                'email' => 'test@phoenixgn.com',
                'username' => 'userl003',
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                'status' => 'verified',
                'email_verified_at' => now(),
                'role' => 'user',
                'track_id' => 'd',
                'usercode' => 'PN0009',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
                
                
          ]);
    }
}
