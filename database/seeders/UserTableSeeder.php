<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'name'=>'Rimi',
            'email'=>'rimizoo468@gmail.com',
            'password'=>bcrypt('13579'),
            'status'=>'active',
            'contact'=>'01620163363',
            'address'=>'Gazipur',
            
        ]);
    }
}
