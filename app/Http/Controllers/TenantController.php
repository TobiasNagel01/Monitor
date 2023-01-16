<?php

namespace App\Http\Controllers;

use App\Http\Requests\TenantRequest;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends CRUDController
{
    protected string $class = Tenant::class;
    protected string $modelRequest = TenantRequest::class;
}
