<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        $tables = DB::table('tables')->get();
        $fields = DB::table('fields')->get();
        return view('dashboard', ['users' => $users, 'tables' => $tables, 'fields' => $fields]);
    }
}
