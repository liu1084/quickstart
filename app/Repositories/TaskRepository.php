<?php
/**
 * Created by IntelliJ IDEA.
 * User: liqing
 * Date: 2016/1/6
 * Time: 1:37
 */

namespace App\Repositories;

use App\Models\Task;
use App\User;

class TaskRepository
{
    public function forUser(User $user){
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}