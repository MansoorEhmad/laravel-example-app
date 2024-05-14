<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class updateController extends Controller
{
    public function editUser(){
        $userId = session('user_id');
        $user = User::where('id', $userId)->get()->first();
        return view('updateUser.index', compact('user'));
    }
    
    public function updateUser(Request $request){
        $data = $this->validateUser();
        $hiddenId = $request->hidden_id;
        
        $message = '';
        
        try{
            DB::beginTransaction();
            User::find($hiddenId)->update($data);
            
            DB::commit();
            
            $message = 'User updated successfully.';
            
        }
        catch(QueryException $e){
            DB::rollBack();
            dd($e);
        }
        
        return redirect(route('page.welcome'))->with('message', $message);
        
    }
    
    private function validateUser(){
        return request()->validate([
            'name' => ['required'],
            'email' => ['required',Rule::unique('users')->ignore(request()->hidden_id)],
            'password' => ['required','min:4', 'max:80']
        ]);
    }
}
