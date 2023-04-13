<?php

namespace App\Http\Controllers;

use App\Models\User;
use Orion\Http\Controllers\Controller as OrionController;

class UserController extends OrionController
{
    protected $model = User::class;
}
