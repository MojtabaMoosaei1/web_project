<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Array =['مجتبی' , 'عباس' , 'سجاد' , 'حامد', 'حسن' , 'امیر', 'محسن' , 'حسین'];

            User::factory(10)->create();


//        foreach ($Array as $value){
//            DB::table('users')->insert([
//                'name' => $value,
//                'email' => $value.'@gmail.com',
//                'password' => Hash::make('password'),
//
//            ]);
//        }
    }
}
