<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin  = new Admin();

        $admin->image_url = '/test';
        $admin->name = 'Super User';
        $admin->email = 'azizemirhanozdemir@gmail.com';
        $admin->password = '$2y$10$Lfip/yizjWVy7Kgav8mhE.N4dXKKDGdRSI2PUaS0icFzeiau5Csue';
        $admin->status = 1;
        $admin->save();
    }
}
