<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'email' => 'info@g-ono.com',
            'password' => bcrypt('Gono8080'),
            'status' => 'activated',
            'role' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \App\Model\Profile::create([
            'user_id' => $user->id,
            'first_name' => '管理者',
            'last_name' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
