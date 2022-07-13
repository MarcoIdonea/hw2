<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Prefer;
use DB;

class preferitiController extends BaseController
{
   
    public function preferiti()
    {    
     
        if(!Session::get('user_id'))
        {
            return redirect('login');
        } 
     $user = User::find(Session::get('user_id'));
     return view('preferiti');
    }
      public function inserisci_preferiti( Request $request)
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
            

     $prefer = new Prefer();
     $prefer-> id_utente= Session::get('user_id');
     $prefer->titolo = $request->titolo;
     $prefer->descrizione =$request->descrizione;
     $prefer->contenuto = $request->contenuto;
     $prefer->immagine = $request->immagine;
     $prefer->save();
     
     }
  
      
        public function stampa_preferiti()
        {    
         if(!Session::get('user_id'))
         {
             return [];
         }
         $user = User::find(Session::get('user_id'));
         
         $prefers = DB::table('prefers')

         ->where('id_utente', '=', $user->id)
         ->select('titolo','descrizione','contenuto', 'immagine')
         ->get();
         
         return $prefers;
    
        } 

        public function delete($tit)
        {    
         if(!Session::get('user_id'))
         {
             return [];
         }
         $user = User::find(Session::get('user_id'));
         
         DB::table('prefers')
         ->where('titolo', '=', $tit, 'and','id_utente', '=', $user->id)
         ->delete();
         

        }
        }