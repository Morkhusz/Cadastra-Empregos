<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vagas')->truncate();
        DB::table('users')->truncate();

        $this->createAdmins();
    }

    public function createAdmins()
    {
        User::create([
            'name' => 'Diego',
            'email' => 'diego@uotz.com',
            'password' => Hash::make('diego123')
        ]);

        $this->command->info('User diego@uotz.com');
    }
}
