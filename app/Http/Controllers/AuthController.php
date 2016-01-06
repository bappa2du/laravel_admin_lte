<?php namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $input = $request->all();
//        return $input;
        $credential = [
            'email'    => $input['email'],
            'password' => $input['password'],
        ];
        if (Auth::attempt($credential)) {
            return redirect()->action('AdminController@getIndex');
        } else {
            return redirect()->back()
                ->with('message', 'User Credential doesnot match with our recoreds');
        }
    }

    public function getRegistration()
    {
        return view('admin.registration');
    }

    public function postRegistration(Request $request)
    {
        $input = $request->all();
        $check_email_exists = User::where('email', $input->email)->first();
        if (empty($check_email_exists)) {
            if ($input->password == $input->confirm_password) {
                $user = [
                    'email'    => $input->email,
                    'password' => bcrypt($input->password),
                ];
                User::create($user);
                return redirect()->action('AuthController@getLogin')
                    ->with('message', 'User Successfully Created');
            } else {
                return redirect()->back()
                    ->with('message', 'Password Miss-Match');
            }
        } else {
            return redirect()->back()
                ->with('message', 'Email Already Exists');
        }

    }

    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

}
