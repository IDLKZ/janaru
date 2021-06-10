<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\File;
use App\Repositories\CourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CourseController extends AppBaseController
{
    /** @var  CourseRepository */
    private $courseRepository;

    public function __construct(CourseRepository $courseRepo)
    {
        $this->courseRepository = $courseRepo;
    }

    /**
     * Display a listing of the Course.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courses = $this->courseRepository->paginate(15);
        $courses->load("category");

        return view('courses.index')
            ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param CreateCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {
        $input = $request->all();
        $input["img"] = File::createFile($request,"img","/uploads/course/");

        $course = $this->courseRepository->create($input);

        Flash::success(__("messages.created"));

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error(__("messages.404"));

            return redirect(route('courses.index'));
        }

        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error(__("messages.404"));

            return redirect(route('courses.index'));
        }

        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param int $id
     * @param UpdateCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRequest $request)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error(__("messages.404"));

            return redirect(route('courses.index'));
        }
        $input = $request->all();

        $input["img"] = File::updateFile($course->img,$request,"img","/uploads/category/");

        $course = $this->courseRepository->update($input, $id);

        Flash::success(__("messages.updated"));

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $course = $this->courseRepository->find($id);

        if (empty($course)) {
            Flash::error(__("messages.404"));

            return redirect(route('courses.index'));
        }
        File::deleteFile($course->img);
        $this->courseRepository->delete($id);

        Flash::success(__("messages.deleted"));

        return redirect(route('courses.index'));
    }
}
