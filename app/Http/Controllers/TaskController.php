<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller as OrionController;

class TaskController extends OrionController
{
    use DisableAuthorization;
    use DisablePagination;
    protected $model = Task::class;


}
