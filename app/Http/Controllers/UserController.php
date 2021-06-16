<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\Register;
use App\Models\File;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Response;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $this->validate($request,
            ["email"=>"unique:users,email","phone"=>"unique:users,phone",
                'password' => 'required|string|max:255|min:4',
                "same_password"=>'same:password|required|string|max:255|min:4',
                ]
        );
        $input = $request->all();
       $input["img"] = File::createFile($request,"img","/uploads/img/");
       $input["password"] = bcrypt($input["password"]);
        $input["skills"] = $request->skills ? json_encode($input["skills"]) : null;
        $user = $this->userRepository->create($input);
        Mail::to($user->email)->send(new Register($user));
        Flash::success(__("messages.created"));

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error(__("messages.404"));

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error(__("messages.404"));

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {

        $user = $this->userRepository->find($id);
        $this->validate($request,
            ["email"=>"unique:users,email,". $id,"phone"=>"unique:users,phone," . $id,
                'password' => 'nullable|sometimes|string|max:255|min:4',
                "same_password"=>'nullable|sometimes|same:password|string|max:255|min:4',
            ]
        );
        if (empty($user)) {
            Flash::error(__("messages.404"));

            return redirect(route('users.index'));
        }
        $input = $request->all();
        $input["img"] = File::updateFile($user->img,$request,"img","/uploads/img/");
        $input["password"] = $request->password ? bcrypt($input["password"]) : $user->password;
        $input["skills"] = $request->skills ? json_encode($input["skills"]) : null;
        $user = $this->userRepository->update($input, $id);

        Flash::success(__("messages.updated"));

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('messages.404');

            return redirect(route('users.index'));
        }
        File::deleteFile($user->img);
        $this->userRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('users.index'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');

    }
}
