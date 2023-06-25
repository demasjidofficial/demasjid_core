<?php

namespace App\Modules\Api\Models;

use App\Modules\Api\Entities\User;
use Faker\Generator;
use CodeIgniter\Shield\Models\UserModel as ShieldUsers;

/**
 * This User model is ready for your customization.
 * It extends Shield's UserModel, providing many auth
 * features built right in.
 */
class UserModel extends ShieldUsers
{
    protected $returnType    = User::class;
    protected $allowedFields = [
        'username', 'status', 'status_message', 'active', 'last_active', 'deleted_at',
        'avatar', 'first_name', 'last_name',
    ];

    /**
     * Performs additional setup when finding objects
     * for the recycler. This might pull in additional
     * fields.
     */
    public function setupRecycler()
    {
        return $this->select("users.*,
            (SELECT secret
                from auth_identities
                where user_id = users.id
                    and type = 'email_password'
                order by last_used_at desc
                limit 1
            ) as email
       ");
    }

    public function fake(Generator &$faker) : User
    {
        return new User([
            'username'   => $faker->userName,
            'first_name' => $faker->firstName,
            'last_name'  => $faker->lastName,
            'active'     => true,
        ]);
    }
}
