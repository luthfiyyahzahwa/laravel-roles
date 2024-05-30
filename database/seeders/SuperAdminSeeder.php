<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([ 
            'name' => 'Kak Ros',
            'email' => 'superadmin@roles.id', 
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([ 
            'name' => 'Upin',
            'email' => 'admin@roles.id', 
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([ 
            'name' => 'Ipin',
            'email' => 'operator@roles.id', 
            'password' => Hash::make('123456')
        ]);
        $productManager->assignRole('Operator');

        // Creating Admin BAAK User
        $adminBAAK = User::create([
            'name' => 'Fizi',
            'email' => 'adminbaak@roles.id',
            'password' => Hash::make('123456')
        ]);
        $adminBAAK->assignRole('Admin BAAK');

        // Creating Admin Keuangan User
        $adminKeuangan = User::create([
            'name' => 'Mail',
            'email' => 'keuangan@roles.id',
            'password' => Hash::make('123456')
        ]);
        $adminKeuangan->assignRole('Admin Keuangan');

        $mahasiswa = User::create([
            'name' => 'Eshan',
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('123456')
        ]);
        $mahasiswa->assignRole('Mahasiswa');
    }
}
