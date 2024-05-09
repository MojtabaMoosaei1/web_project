<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' =>'mojtaba',
            'email' => 'mojtaba12@gmail.com',
            'password' => bcrypt('mojtaba'),
        ]);
    }
}
