<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt(123456789),
            'address'=>'dhaka',
            'phone_number'=>'01811121902',
            'bank_info'=>'1766439ABz',
            'role_id'=>'1',
        ]);
    }
}
