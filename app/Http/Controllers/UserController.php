<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends CRUDController
{
    protected string $class = User::class;
    protected string $modelRequest = UserRequest::class;
    protected bool $hasTenant = true;
}
