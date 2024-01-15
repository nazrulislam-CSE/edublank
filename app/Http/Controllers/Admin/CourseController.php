<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Category;
use App\Models\CourseClass;
use App\Models\Subject;
use App\Models\ExamDetail;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $pageTitle = 'Course List';
        return view('admin.courses.index', compact('courses', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructors = User::where('role','Instructor')->latest()->get();
        $categories = Category::all();
        $classes = CourseClass::where('status',1)->latest()->get();
        $subjects = Subject::where('status',1)->latest()->get();
        $exams = ExamDetail::where('status',1)->latest()->get();
        $pageTitle = 'Course Create';
        return view('admin.courses.create', compact('instructors', 'categories','classes','subjects','exams', 'pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' =>'required',
            'instructor_id' =>'required',
            'course_title' =>'required',
            'course_name' =>'required',
            'description' =>'required',
            'video' =>'required',
            'course_level' =>'required',
            'course_lessons' =>'required',
            'course_duration' =>'required',
            'course_hours' =>'required',
          'regular_price' =>'required',
            'discount_price' =>'required',
          'status' =>'required',
          'course_image'=> 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $course = new Course;
        $user_id = Auth::guard('admin')->user()->id;
        
        $course->category_id = $request->category_id;
        $course->instructor_id = $request->instructor_id;
        $course->course_title = $request->course_title;
        $course->course_name = $request->course_name;
        $course->course_name_slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->course_name_slug)));
        $course->description = $request->description;
        $course->video = $request->video;
        $course->course_level = $request->course_level;
        $course->course_lessons = $request->course_lessons;
        $course->course_duration = $request->course_duration;
        $course->course_hours = $request->course_hours;
        $course->resources = $request->resources;
        $course->certificate = $request->certificate;
        $course->regular_price = $request->regular_price;
        $course->discount_price = $request->discount_price;
        $course->prerequisites = $request->prerequisites;
        $course->bestseller = $request->bestseller;
        $course->featured = $request->featured;
        $course->highestrated = $request->highestrated;
        $course->promo_code = mt_rand(1000, 9999);
        $course->discount_type = $request->discount_type;
        $course->status = $request->status;
        $course->updated_by = $user_id;
        $course->save();

        if ($request->file('course_image')) {
            $file = $request->file('course_image');
            @unlink(public_path('upload/course/'.$course->course_image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course'),$filename);
            $course['course_image'] = $filename;
        }

        $course->save();

        flash()->addSuccess("Course Created Successfully.");
        $url = '/admin/courses/index';
        return redirect($url);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);
        $pageTitle = 'Course View';
        return view('admin.courses.show', compact('course', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        $instructors = User::where('role','Instructor')->latest()->get();
        $categories = Category::all();
        $pageTitle = 'Course Edit';
        return view('admin.courses.edit', compact('course','instructors','categories','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::find($id);
        $course->course_title = $request->course_title;
        $course->course_name = $request->course_name;
        $course->course_name_slug = strtolower(trim(preg_replace('/\s+/', '-', $request->course_name)));
        $course->description = $request->description;
        $course->video = $request->video;
        $course->course_level = $request->course_level;
        $course->course_lessons = $request->course_lessons;
        $course->course_duration = $request->course_duration;
        $course->course_hours = $request->course_hours;
        $course->resources = $request->resources;
        $course->certificate = $request->certificate;
        $course->regular_price = $request->regular_price;
        $course->discount_price = $request->discount_price;
        $course->prerequisites = $request->prerequisites;
        $course->bestseller = $request->bestseller;
        $course->featured = $request->featured;
        $course->highestrated = $request->highestrated;
        $course->discount_type = $request->discount_type;
        $course->status = $request->status;
        $course->save();

        if ($request->file('course_image')) {
            $file = $request->file('course_image');
            @unlink(public_path('upload/course/'.$course->course_image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course'),$filename);
            $course['course_image'] = $filename;
        }

        $course->save();

        flash()->addSuccess("Course Updated Successfully.");
        $url = '/admin/courses/index';
        return redirect($url);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::find($id);

        try {
            if(file_exists($course->course_image)){
                unlink($course->course_image);
            }
        } catch (Exception $e) {

        }


        $course->delete();
        

        flash()->addError("Course Deleted Successfully.");
        $url = '/admin/courses/index';
        return redirect($url);
    }
}
