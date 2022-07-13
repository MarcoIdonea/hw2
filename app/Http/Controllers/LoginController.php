<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class LoginController extends BaseController
{
    public function login_form()
    {
        if(Session::get('user_id'))
        {
            //return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }

    public function do_login()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        // Validazione dati
        if(strlen(request('email')) == 0 || strlen(request('password')) == 0)
        {
            Session::put('error', 'empty_fields');
            return redirect('login')->withInput();
        }
        $user = User::where('email', request('email'))->first();
        if(!$user || !password_verify(request('password'), $user->password))
        {
            Session::put('error', 'wrong');
            return redirect('login')->withInput();
        }
       
        // Login
        Session::put('user_id', $user->id);
        // Redirect alla home
        return redirect('home');
    }
    
    

    public function register_form(){
        if(Session :: get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('register')->with('error', $error);
    }

public function do_register(){
     //validazione dati
     if(Session::get('user_id'))
        {
            return redirect('login');
        }
     if(strlen(request('nome')) ==0 || strlen(request('cognome')) ==0 || strlen(request('email')) ==0 || strlen(request('password'))==0 || strlen(request('conferma_password'))==0)
     {
     Session:: put('error', 'empty_fields');
        return redirect('register')->withInput();
    }
    else if(request('password') != request('conferma_password'))
    {
        Session:: put('error', 'bad_password');
            return redirect('register')-> withInput();
         }
         else if(strlen(request('password')) <=7)
         {
             {
             Session::put('error', 'small_password');
             return redirect('register')->withInput();
         }
         }
    else if(User:: where('email', request('email'))-> first())
    {
        Session:: put('error', 'existing');
        return redirect('register')-> withInput();
     }

     // creazione utente
     $user= new User;
     $user->nome = request('nome');
     $user->cognome = request('cognome');
     $user->email = request('email');
     $user->password = password_hash(request('password'), PASSWORD_BCRYPT);
        $user->save();

        Session::put('user_id', $user->id);
        return redirect('login');
    }
    public function logout()
    {
        // Elimina dati di sessione
        Session::flush();
        return redirect('login');
    }
}
