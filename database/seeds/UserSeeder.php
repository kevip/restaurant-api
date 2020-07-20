<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'John',
                'username' => 'JohnSV',
                'email' => 'john@sv.com',
                'password' => Hash::make('secret'),
                'token' => Str::random(50),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Johna',
                'username' => 'JohnaSV',
                'email' => 'johnna@sv.com',
                'password' => Hash::make('secret'),
                'token' => Str::random(50),
                'created_at' => Carbon::now(),

            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
