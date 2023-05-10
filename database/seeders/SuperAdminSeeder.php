<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user         = new User();
        $user->name   = 'Super Admin';
        $user->email  = 'super@admin.com';
        $user->role   = 'superadmin';
        $user->is_approved = 1;
        $user->password    = Hash::make('super@admin');
        $user->save();
        
    }
}
