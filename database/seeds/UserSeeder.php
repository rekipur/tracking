<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\user;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //membuat role manajer
        $manajerRole = new Role();
        $manajerRole->name = "manajer";
        $manajerRole->display_name = "Manajer";
        $manajerRole->save();      

        //membuat role member
        $auditorRole = new Role();
        $auditorRole->name = "auditor";
        $auditorRole->display_name = "Auditor";
        $auditorRole->save();

        //membuat role pegawai
        $pegawaiRole = new Role();
        $pegawaiRole->name = "pegawai";
        $pegawaiRole->display_name = "Pegawai";
        $pegawaiRole->save();

        // Membuat sample admin
        $admin = new User();
        $admin->name= 'Admin Larapus';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample manajer
        $manajer = new User();
        $manajer->name= 'Manajer Larapus';
        $manajer->email = 'manajer@gmail.com';
        $manajer->password = bcrypt('rahasia');
        $manajer->save();
        $manajer->attachRole($manajerRole);

        // Membuat sample auditor
        $auditor = new User();
        $auditor->name= 'Auditor Larapus';
        $auditor->email = 'auditor@gmail.com';
        $auditor->password = bcrypt('rahasia');
        $auditor->save();
        $auditor->attachRole($auditorRole);

      // Membuat sample pegawai
        $pegawai = new User();
        $pegawai->name = "sample pegawai";
        $pegawai->email = 'pegawai@gmail.com';
        $pegawai->password = bcrypt('rahasia');
        $pegawai->save();
        $pegawai->attachRole($pegawaiRole);

    }
}
