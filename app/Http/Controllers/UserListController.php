<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function index()
    {
        return view('modules.user-list.index');
    }
}
