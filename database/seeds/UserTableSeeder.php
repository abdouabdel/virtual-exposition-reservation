<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {


            DB::table('users')->insert([
                'name'              => 'abdou abdel',
                'username'          => md5(uniqid(mt_rand(), true)),
                'email'             => 'abdou@admin.com',
                'ville'             => 'casablanca',
                'password'          => bcrypt('demodemo'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);

            DB::table('users')->insert([
                'name'              => 'admin',
                'username'          => md5(uniqid(mt_rand(), true)),
                'email'             => 'admin@admin.com',
                'ville'             => 'ouejda',
                'password'          => bcrypt('demodemo'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ]);

    }
}
