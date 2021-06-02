<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'iqrom';
        $inputan['email'] = 'rom@gmail.com';
        $inputan['password'] = Hash::make('123456');
        $inputan['phone'] = '085852527575';
        $inputan['alamat'] = 'Baureno Rt 03 Rw 05';
        $inputan['role'] = 'admin';
        User::create($inputan);

    }
}
