<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;


class loginController extends Controller
{
    public function Index(){
        return view('login.index');
    }
    
    public function userLogin(Request $request){
        //dd($request);
        $data = $this->validateUser();
        $email = $data['email'];
        $password = $data['password'];
//        $encryptPassword = md5($password);
        
        $query = "SELECT `id`, `name`, `email`, `password`
        FROM `users` WHERE `email` = '$email' AND `password` = '$password';";
        $count = 0;
        $message = '';
        
        try{
            DB::beginTransaction();
            $User = DB::select($query);
            $count = count($User);
            DB::commit();
        }
        catch(QueryException $e){
            DB::rollBack();
            dd($e);
        }
        
        if($count > 0){
            foreach($User as $u){
            session()->put('user_id',$u->id);
            session()->put('name',$u->name);
            session()->put('email',$u->email);
            session()->put('password',$u->password);
            }
            return redirect(route('page.welcome'));
        }else{
            $message = 'Incorrect email or password';
            return back()->with('message', $message);
        }
        
    }
    
    private function validateUser(){
        return request()->validate([
            "email" => ['required','email'],
            "password" => ['required', 'min:4', 'max:80'],
        ]);
    }
    
    public function userLogout(){
        session()->flush();
        session()->regenerate();
        return view('login.index');
    }
    
}
