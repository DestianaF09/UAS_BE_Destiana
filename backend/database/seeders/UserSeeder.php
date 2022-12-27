<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::factory()->create([
            'name'=>'Destiana Friska Sari',
            'email'=>'Desti@gmail.com',
            'email_verified_at'=>Carbon::now()->format('d-m-Y'),
            'password'=>bcrypt('12345678'),
            'role'=>'admin',
            'is_aktif'=>true,
            'status'=>'active',
            'foto'=>'aku.jpg',
            'remember_token'=>Str::random(60),
            'created_at'=>Carbon::now()->format('d-m-Y'),

        ]);
    }
}