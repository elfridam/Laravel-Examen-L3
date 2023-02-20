<?php

namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller

{

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }
    /**
     * Write code on Metho

     * @return response(
     */

    public function registration()
    {
        return view('auth.registration');
    }

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }
        return redirect("dashboard")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'age' => 'required',
            'niveau_etude' => 'required',
            'sexe' => 'required',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("/")->withSuccess('Great! You have Successfully loggedin');

    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect("/")->withSuccess('Opps! You do not have access');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'age' => $data['age'],
            'niveau_etude' => $data['niveau_etude'],
            'sexe' => $data['sexe'],
        ]);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }

}
