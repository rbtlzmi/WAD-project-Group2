<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterStepTwoController extends Controller
{
    public function create()
    {
        return view('auth.register-step2');
    }

    public function store(Request $request)
    {
        auth()->user()->update([
            'identification_id' => $request->identification_id,
            'phone_no' => $request->phone_no,
            'address' => $request->address,
            'role_id' => $request->role_id,
        ]);


            // $staff_id = IdGenerator::generate(['table' => 'users', 'length' => 6, 'prefix' => date('y')]);

            // $user = new User();
            // $user->staff_id = $staff_id;
            // $user->title = $request->get('title');
            // $user->save();



        return redirect()->route('dashboard');

    }


}
