<?php

namespace App\Http\Controllers;

use App\Mail\Forget;
use App\Mail\Register;
use App\Models\Category;
use App\Models\Course;
use App\Models\File;
use App\Models\Recovery;
use App\Models\Review;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::with("courses")->get();
        return view("frontend.index",compact("categories"));

    }

    public function course($alias){
        if($alias){
            $category = Category::firstWhere("alias",$alias);
            if($category){
                $courses = Course::where("category_id",$category->id)->get();
                return view("frontend.course",compact("category","courses"));
            }
            else{
                return  abort(404);
            }
        }
        else{
            return abort(404);
        }



    }

    public function videos($alias){
        if($alias){
            $course = Course::firstWhere("alias",$alias);
            if($course){
                $courses = Course::where("category_id",$course->category_id)->get();
                $videos = Video::where("course_id",$course->id)->get();
                return view("frontend.videos",compact("course","courses","videos","alias"));
            }
            else{
                return  abort(404);
            }
        }
        else{
            return abort(404);
        }

    }

    public function videoSingle($alias){
        if($alias){
            $video = Video::firstWhere("alias",$alias);
            if($video){

                return view("frontend.video_single",compact("video"));
            }
            else{
                return  abort(404);
            }
        }
        else{
            return abort(404);
        }

    }

    public function auth(Request $request){
        $this->validate($request,[
           "email"=>"required|email",
           "password"=>"required|min:4"
        ]);
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password],$request->input("remember"))){
            return redirect(route("home"));
        }
        else{
            return back()->with("fail","Неверный логин или пароль");
        }

    }


    public function registerUser(Request $request){

        $this->validate($request,[
            "img"=>"nullable|sometimes|file|image|max:10240",
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'phone' => 'required|string|unique:users,phone,max:255',
            'work' => 'nullable|string|max:500',
            'birthday' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'skills' => 'nullable',
            'about' => 'nullable|string',
            'password' => 'required|string|max:255|min:4',
            'remember_token' => 'nullable|string|max:100',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $input = $request->all();
        $input["img"] = File::createFile($request,"img","/uploads/img/");
        $input["password"] = bcrypt($input["password"]);
        $input["skills"] = $request->skills ? json_encode($input["skills"]) : null;
        $input["is_admin"] = 0;
        $model = new User();
        if($model->fill($input)->save()){
            $user = User::firstWhere("email",$input["email"]);
            if($user){
                Mail::to($user->email)->send(new Register($user));

            }

            return back()->with("success","Успешно зарегистрировано");
        }
        else{
            return back()->with("fail","Неверный логин или пароль");
        }
    }

    public function reviews(){
        $reviews = Review::all();
        return view("frontend.review",compact("reviews"));
    }

    public function reviewSingle($alias){
        if($alias){
            $review = Review::firstWhere("id",$alias);
            if($review){
                return view("frontend.single-review",compact("review"));
            }
            else{
                return  abort(404);
            }
        }
        else{
            return abort(404);
        }

    }


    public function forget(){
        return view("auth.forget");
    }

    public function verification(Request $request){
        $this->validate($request,["email"=>"required|email"]);
        if($user = User::firstWhere("email",$request->email)){
            $recovery = Recovery::firstWhere("user_id",$user->id);
            if ($recovery){$recovery->delete();}
            $code = Str::random(16);
            Recovery::create([
               "user_id"=>$user->id,
                "code"=>$code,
                "expiration_date"=>Carbon::now()->addDay()
            ]);
            Mail::to($user->email)->send(new Forget($user,$code));

        }
        return redirect()->back()->with("success","Успешно отправлен код на восстановление доступа!");
    }

    public function checkVerification($code){
        $verification = Recovery::where(["code"=>$code])->first();
        if($verification){
            if($verification->expiration_date > Carbon::now()){
                $user = User::firstWhere("id",$verification->user_id);
                return view("auth.recovery",compact("user","code"));
            }
            else{
                $verification->delete();
                abort(404);
            }
        }
        else{
            abort(404);
        }
    }

    public function changePassword(Request $request){
        $this->validate($request,["password"=>"required|min:4|max:255","same_password"=>"same:password|required|min:4|max:255"]);
        $recovery = Recovery::firstWhere("code",$request->code);
        if($recovery){
            $user = User::firstWhere("id",$recovery->user_id);
            if($user){
                $user->password = bcrypt($request->password);
                $user->save();
                $recovery->delete();
                return  redirect()->route("login")->with("success",__("messages.success"));
            }
            abort(404);
        }
        abort(404);
    }


    public function write(Request $request){
        $this->validate($request, ['img' => 'nullable|file|image|max:10240', 'course_id' => 'required', 'author' => 'required|string|max:255', 'title' => 'required|string|max:255', 'description' => 'required|string',]);
        $review = new Review();
        $review->fill($request->all())->save();
        return redirect()->back()->with("success","Успешно добавлен отзыв!");




    }
}
