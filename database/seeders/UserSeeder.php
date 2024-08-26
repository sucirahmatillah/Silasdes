<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // create Permissions
        $permissions = [
            // Kantor Desa
            ['guard_name' => 'user', 'name' => 'index-kantor-desa'],
            ['guard_name' => 'user', 'name' => 'update-kantor-desa'],
            // Pengguna
            ['guard_name' => 'user', 'name' => 'index-pengguna'],
            ['guard_name' => 'user', 'name' => 'create-pengguna'],
            ['guard_name' => 'user', 'name' => 'edit-pengguna'],
            ['guard_name' => 'user', 'name' => 'destroy-pengguna'],
            // Penduduk
            ['guard_name' => 'user', 'name' => 'index-penduduk'],
            ['guard_name' => 'user', 'name' => 'create-penduduk'],
            ['guard_name' => 'user', 'name' => 'show-penduduk'],
            ['guard_name' => 'user', 'name' => 'edit-penduduk'],
            ['guard_name' => 'user', 'name' => 'destroy-penduduk'],
            // Surat
            ['guard_name' => 'user', 'name' => 'index-surat'],
            ['guard_name' => 'user', 'name' => 'create-surat'],
            ['guard_name' => 'user', 'name' => 'show-surat'],
            ['guard_name' => 'user', 'name' => 'edit-surat'],
            ['guard_name' => 'user', 'name' => 'destroy-surat'],
            ['guard_name' => 'user', 'name' => 'status-surat'],
            ['guard_name' => 'user', 'name' => 'print-surat'],
            // Persetujuan
            ['guard_name' => 'user', 'name' => 'index-persetujuan'],
            ['guard_name' => 'user', 'name' => 'show-persetujuan'],
            ['guard_name' => 'user', 'name' => 'setujui-persetujuan'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        // create Roles
        $roles = [
            ['guard_name' => 'user', 'name' => 'Administrator'],
            ['guard_name' => 'user', 'name' => 'Petugas'],
            ['guard_name' => 'user', 'name' => 'Kepala Desa'],
        ];

        foreach ($roles as $role) {
            $created_role = Role::create($role);

            if ($created_role->name == 'Petugas') {
                // Penduduk
                $created_role->givePermissionTo('index-penduduk');
                $created_role->givePermissionTo('create-penduduk');
                $created_role->givePermissionTo('show-penduduk');
                $created_role->givePermissionTo('edit-penduduk');
                $created_role->givePermissionTo('destroy-penduduk');
                // Surat
                $created_role->givePermissionTo('index-surat');
                $created_role->givePermissionTo('create-surat');
                $created_role->givePermissionTo('show-surat');
                $created_role->givePermissionTo('edit-surat');
                $created_role->givePermissionTo('destroy-surat');
                $created_role->givePermissionTo('status-surat');
                $created_role->givePermissionTo('print-surat');
            }

            if ($created_role->name == 'Kepala Desa') {
                // Penduduk
                $created_role->givePermissionTo('index-penduduk');
                $created_role->givePermissionTo('show-penduduk');
                // Persetujuan
                $created_role->givePermissionTo('index-persetujuan');
                $created_role->givePermissionTo('show-persetujuan');
                $created_role->givePermissionTo('setujui-persetujuan');
            }
        }

        // Create Users
        $users = [
            [
                'nama' => 'Administrator',
                'email' => 'administrator@sipedes.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ],
            [
                'nama' => 'Petugas',
                'email' => 'petugas@sipedes.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ],
            [
                'nama' => 'Kepala Desa',
                'email' => 'kepaladesa@sipedes.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            $created_user = User::create($user);
            $created_user->assignRole($created_user->nama);
        }
    }
}
