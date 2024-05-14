<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;

class resgisterController extends Controller
{
    public function Register(){
        return view('register.index');
    }
    
    public function registerUser(Request $request){
        $data = $this->validateUser();
        $message = '';
        
        try{
            DB::beginTransaction();
//            $encryptPassword = md5($data['password']);
//            $data['password'] = $encryptPassword;
            User::create($data);
            
            DB::commit();
            $message = 'User registered successfully.';
        }
        catch(QueryException $e){
            DB::rollBack();
            dd($e);
        }
        
        return redirect(route('index'))->with('message', $message);
    }
    
    private function validateUser(){
        return request()->validate([
           'name' => ['required', 'min:5', 'max:50'], 
           'email' => ['required','email', Rule::unique('users')], 
           'password' => ['required', 'min:4', 'max:80']
        ]);
    }
}
