<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
           ['name'=>'list','status'=>'active'],
           ['name'=>'create','status'=>'active'],
           ['name'=>'store','status'=>'active'],
           ['name'=>'edit','status'=>'active'],
           ['name'=>'delete','status'=>'active'],
           ['name'=>'view','status'=>'active'],
           
            
        ]);
    }
}
