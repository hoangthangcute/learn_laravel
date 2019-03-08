<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //php artisan make: controller UserController

    public function admin(){
        return view('admin.dashboard');
    }

    public function get_add_user(){
        return view('admin.users.add_user');
    }

    public function add_user(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);

        DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => $password]);
        return redirect('/get_add_user');
    }

    // public function get_list_user(){
    //     return view('admin.users.list_user');
    // }
    
    public function list_user(){
        $data['data'] = DB::table('users')->get();
        return view('admin.users.list_user', $data);
    }

    public function delete_user($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/user');
    }

    public function get_edit_user($id){
        //echo "$id";exit;
        $user = DB::table('users')->where('id', $id)->first();;
        return view('admin.users.edit_user', ['user' => $user]);    
    }

    public function edit_user(){
        
    }
}
