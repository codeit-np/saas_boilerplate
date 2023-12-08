<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Jobs\TenantJob;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    function subscribe()
    {
        return view('subscribe');
    }

    function subscribeStore(Request $request)
    {
        $tenant = Tenant::create(['id' => $request->tenant, 'name' => $request->name, 'email' => $request->email, 'password' => $request->password]);
        $tenant->domains()->create(['domain' => "$request->domain" . "." . "localhost"]);
    }
}
