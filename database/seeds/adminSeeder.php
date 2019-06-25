<?php

use Illuminate\Database\Seeder;
use App\User;
class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Administrator',
          'username' => 'admin',
          'password' => bcrypt(12345678)
        ]);
    }
}
