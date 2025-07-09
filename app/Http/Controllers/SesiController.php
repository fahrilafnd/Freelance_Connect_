<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    //welcome
    function welcome(){
        return view('welcome');
    }
    // Login
    function index()
    {
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/listprojects');
            }
            elseif(Auth::user()->role == 'client'){
                return redirect('/client/readproject');
            }
            elseif(Auth::user()->role == 'freelancer'){
                return redirect('/freelancer/projects');
            }
        }
        else{
            return back()->with('loginError', 'Email atau password salah!');
        }

    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }

    // Register Client
    function register_client(){
        return view('registerclient');
    }

    function add_client(Request $request){
        $request->validate([
            'name' => 'required|string|unique:users,name',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8',
            'repeat-password' => 'required|string|same:password',
            'company' => 'required|string', // Validasi untuk company
            'bio' => 'required|string', // Validasi untuk bio
        ]);
    
        // Buat pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'client';
        $user->save();
    
        // Buat klien baru
        $client = new Client();
        $client->company = $request->company;
        $client->bio = $request->bio;
        $client->user_id = $user->id;
        $client->save(); 
    
        return redirect('/login')->with('success', 'Client registered successfully!');
    }

    function register_freelancer(){
        return view('registerfreelancer');
    }

    function freelancer_info(){
        return view('freelancerinfo');
    }

    function add_freelancer_info(Request $request){
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'experience' => 'required|string',
            'skills' => 'required|string',
            'bio' => 'required|string',
            'rekening' => 'required|string',
            'bank' => 'required|string',
        ]);

        // Ambil ID user terbaru
        $latestUser = User::latest()->first();

        $freelancer = new Freelancer();
        $freelancer->first_name = $request->first_name;
        $freelancer->last_name = $request->last_name;
        $freelancer->experience = $request->experience;
        $freelancer->skills = $request->skills;
        $freelancer->bio = $request->bio;
        $freelancer->rekening = $request->rekening;
        $freelancer->bank = $request->bank;
        $freelancer->user_id = $latestUser->id; // Menggunakan ID user terakhir
        $freelancer->save();

        return redirect('/login')->with('success', 'Client data is added!');
    }

    function add_freelancer(Request $request){

        $request->validate([
            'name' => 'required|string|unique:users,name',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8',
            'repeat-password' => 'required|string|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'freelancer';
        $user->save();

        return redirect('/registerfreelancer/info')->with('success', 'Client registered successfully!');
    }
}

