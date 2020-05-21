<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();

        $PegawaiRole = Role::where('nama', 'Pegawai')->first();
        $OwnerRole = Role::where('nama', 'owner')->first();

        $Pegawai = new User();
        $Pegawai->name = 'Pegawai';
        $Pegawai->email = 'pegawai@gmail.com';
        $Pegawai->password = bcrypt('pegawai');
        $Pegawai->save();

        $Owner = new User();
        $Owner->name = 'Owner';
        $Owner->email = 'owner@gmail.com';
        $Owner->password = bcrypt('owner');
        $Owner->save();

        
        $Pegawai->roles()->attach($PegawaiRole);
        $Owner->roles()->attach($OwnerRole);

    }
}
