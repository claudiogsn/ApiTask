<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller as OrionController;

class TaskController extends OrionController
{
    use DisableAuthorization;
    protected $model = Task::class;
}
