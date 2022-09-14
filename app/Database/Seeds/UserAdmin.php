<?php

namespace App\Database\Seeds;

use App\Entities\User;
use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserAdmin extends Seeder
{
    public function run()
    {
        $users     = model(UserModel::class);
        $firstName = 'Mochamad';
        $lastName  = 'Alzam';
        $username  = 'alzam';
        $email     = 'alzam@admin.com';
        $password  = 'alzam@admin.com';
        $user      = new User([
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'username'   => $username,
        ]);
        $users->save($user);

        $user = $users->where('username', $username)->first();
        $user->createEmailIdentity([
            'email'    => $email,
            'password' => $password,
        ]);

        $user->addGroup('staff');
    }
}
