<?php

namespace App\Policies;

use App\Http\Requests\Request;
use App\User;
use App\Models\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destory(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
