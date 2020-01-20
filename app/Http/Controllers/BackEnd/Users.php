<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class Users extends BackEndController
{
    public function index(){
        $rows = User::paginate(10);
        return view('back-end.users.index', compact('rows'));
          
}
    public function create(){
        return view('back-end.users.create');
    }

    public function store(Request $request){
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //return redirect()->route('back-end.users.index');
        return redirect()->route('home.index')   ;
        
    }
    
    public function edit($id){
        $row = User::FindOrFail($id);
        return view('back-end.users.edit' , compact('row')); 
    }

    public function update($id , Request $request){
        $row = User::FindOrFail($id);

        $requestArray = [
            
            'name' => $request->name,
            'email' => $request->email,
            
        ];

        if(request()->has('password') && request()->get('password') != " "){
            $requestArray = $requestArray + [ 'password' => Hash::make($request->password)];
        }

        dd($requestArray);

        $row = update( $requestArray);
    }

    public function delete($id){
        
    }
}