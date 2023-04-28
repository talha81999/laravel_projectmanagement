<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use App\Models\tbl_UserModel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('authentication.signin');
    }

    public function loginUser(Request $request)
    {
        $request->validate(
            [
                'email'        =>     'required|email|unique:users',
                'password'     =>     'required',
            ]
        );

        $user = tbl_UserModel::where('user_email', '=', $request->email)->first();
        if($user)
        {
            if($user->user_password == $request->password)
            {
                $request->session()->put('user_id', $user->user_id);
                if($user->user_type == 0)
                {
                    setSession($user);
                    return redirect('admin-dashboard');
                }
                elseif ($user->user_type == 1) {
                    # code...
                }
                elseif ($user->user_type == 2) {
                    # code...
                }
                else{
                    return  'This user does not belong to any user role!';
                }

            }
            else{
                return back()->with('fail', 'Password not matches!');
            }
        } else{
            return back()->with('fail', 'This email is not registered!');
        }
    }

    public function openAdminDashboard()
    {
        return view('admin.admin-dashboard');
    }

    public function logoutUser()
    {
        session()->invalidate();
        return redirect('login');
    }
}
