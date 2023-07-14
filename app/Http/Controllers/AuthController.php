<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function showSignupForm()
    {
        return view('signup');
    }
    
    public function signup(Request $request)
    {
        // Validate user input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|string|same:password',
            'terms' => 'required',
        ]);

      
        // Create new user
        $user = new User();
      
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
    
        // Redirect to sign in page
        return redirect('/signin')->with('success', 'Sign up successful! Please sign in.');
    }
    
    public function showSigninForm()
    {
        return view('signin');
    }
    
    public function signin(Request $request)
    {
        // Validate user input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        // Attempt to authenticate the user
        if (\Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication successful
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
    


    
public function logout(Request $request)
{
    \Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/signin');
}

}
