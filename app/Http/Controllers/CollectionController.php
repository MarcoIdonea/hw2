<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;
use DB;

class CollectionController extends BaseController
{
   
    public function home()
    {
        // Controllo accesso
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        // Leggiamo username
        $user = User::find(Session::get('user_id'));
        return view('home')->with('nome', $user->nome);
    }
    public function ricerca_bbc()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url="https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }
        public function ricerca_sport()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url1="https://newsapi.org/v2/top-headlines?country=it&category=sports&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url1);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }
        public function ricerca_general()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url1="https://newsapi.org/v2/top-headlines?country=it&category=general&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url1);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }

        public function ricerca_business()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url1="https://newsapi.org/v2/top-headlines?country=it&category=business&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url1);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }
        public function ricerca_entertainment()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url1="https://newsapi.org/v2/top-headlines?country=it&category=entertainment&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url1);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }
        public function ricerca_health()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url1="https://newsapi.org/v2/top-headlines?country=it&category=health&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url1);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }
        public function ricerca_scienza()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url1="https://newsapi.org/v2/top-headlines?country=it&category=science&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url1);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }
        public function ricerca_tecnologia()
    {
        
            if(!Session::get('user_id'))
            {
                return redirect('login');
            } 
    $url1="https://newsapi.org/v2/top-headlines?country=it&category=technology&apiKey=2fdbce1d30114e82adc67eaca06efc9a";
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url1);
    curl_setopt($curl, CURLOPT_POST,0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt( $curl, CURLOPT_USERAGENT, "My User Agent" );
 
    $result=curl_exec($curl);
    $json= json_decode($result, true);

    curl_close($curl);
     return  json_encode($json); 
 
         
        }
}
