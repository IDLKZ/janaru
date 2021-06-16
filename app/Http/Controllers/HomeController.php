<?php

namespace App\Http\Controllers;


use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function editUser(Request $request){
        $this->validate($request,[
            "img"=>"nullable|sometimes|file|image|max:10240",
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'work' => 'nullable|string|max:500',
            'birthday' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'skills' => 'nullable',
            'about' => 'nullable|string',
            'password' => 'nullable|string|max:255|min:4',
            'remember_token' => 'nullable|string|max:100',
            'created_at' => 'nullable',
            'updated_at' => 'nullable']);
        $user = User::find(auth()->id());
        $input = $request->all();
        if($request->password){
            $input["password"] = bcrypt($input["password"]);
        }
        else{
            unset($input["password"]);
        }
        $input["email"] = $user->email;
        $input["phone"] = $user->phone;
        $input["is_admin"] = $user->is_admin;
        $input["is_admin"] = $user->is_admin;
        $input["img"] = File::updateFile($user->img,$request,"img","/uploads/img/");
        $user->update($input);
        Flash::success(__("messages.updated"));

        return redirect()->back();






    }
}
