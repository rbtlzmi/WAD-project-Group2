<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Helper;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(50);



        return view('users.index', compact('users'));
    }

    // public function create()
    // {
    //     $users = DB::table('users')
    //     ->get();

    //     return view ('appointment.create',['users'=> $users]);
    // }


}
