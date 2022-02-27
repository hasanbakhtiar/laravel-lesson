<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function adduser(){
        echo '<a href="/Lessons/laravel-lesson/public/admin">Admin</a>';
            echo '<br>add user page';
    }
}
