<?php


namespace App\Repositories\Eloquents;

use App\Models\User;
use \App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * @var User
     */
    private $user;

    /**
     * EloquentUser constructor.
     * @param User $model
     */

    public function __construct(User $user)
    {
        $this->user = $user;

        parent::__construct($user);
    }
}
