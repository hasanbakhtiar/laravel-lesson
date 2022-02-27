<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        echo '<a href="/Lessons/laravel-lesson/public/admin/user/add">Add User</a>';
        echo '<br>admin';
    }
};
