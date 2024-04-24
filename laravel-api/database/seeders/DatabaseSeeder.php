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
        $d=\App\Models\Role::create(["name" => "admin"]);
        $d->User()->create([
            'name' => 'helal',
            'email' => 'admin@admin.com',
            'password' => bcrypt(12345678),
            'address' => 'dhaka',
            'phone_number' => '01811121902',
            'bank_info' => '1766439ABz'
        ]);
    }
}
