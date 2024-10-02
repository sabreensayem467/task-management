<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function signup(){
        $user= new User();
        $user->role="user";
          return view('dashboard.users.sign-up');

    }
    public function store_admmin(Request $request ):RedirectResponse{
       
        $request->validate([
            'name' => 'required|unique:users|max:150',
            'email' => 'required|unique:users'
        ], [
            'required' => 'The :attribute field is required.',
            'name.size' => 'The :attribute must be exactly :size.',
            'email'   =>' the  :attribute field is unique'
        ]); 
        $user= new User();
      
        $user->name =$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return back()->with('success', 'user Add Successfully');

    }
    public function store_user(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        
        ]); 
       
           $user= User::create([
         
           'name' => $request->name,
           
            'email' => $request->email,
            'password' => Hash::make($request->password)
           

        ]);

       event(new Registered($user));

        Auth::login($user);
        $request->session()->put('name', Auth::user()->name);
        //return back()->with('success', 'user Add Successfully');
        return redirect('verify-email');
    }
    
   public function verify_email(){
    return view('dashboard.users.signUp-verify-email');
   }
   public function verify_phone(){
    return view('dashboard.users.signUp-verify-code-phone');
   }
   public function verify(){
    return view('dashboard.users.successfully');
   }
    
    public function signin(){
        $user= new User();
        $user->role="user";
          return view('dashboard.users.sign-in');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            $request->session()->put('name', Auth::user()->name);
    
           // return redirect()->intended('/index');
            return view('dashboard.home.index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function password(){
        return view('dashboard.users.forgot-pass');
       }
       public function pass_email(){
        return view('dashboard.users.forgot-pass-with-mail');
       }
       public function pass_phone(){
        return view('dashboard.users.forgot-pass-with-phone');
       }
    public function index()
    {
        $user =User::get();
        return view('dashboard.users.profile', ['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.users.successfully-02');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $user=User::findOrfail($id);
        return view('dashboard.users.edit_user',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
