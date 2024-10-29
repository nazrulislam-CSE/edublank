<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Category;
use App\Models\CourseClass;
use App\Models\Batch;
use App\Models\Subject;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('category')->get();
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
        $batches = Batch::where('status', 1)->latest()->get();
        $classes = CourseClass::where('status',1)->latest()->get();
        $subjects = Subject::where('status',1)->latest()->get();
        $exams = Exam::where('status',1)->latest()->get();
        $pageTitle = 'Course Create';
        return view('admin.courses.create', compact('batches','instructors', 'categories','classes','subjects','exams', 'pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_bn' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_bn' => 'required|string|max:255',
            'level' => 'required|integer',
            'lessons' => 'required|integer',
            'duration' => 'required|string',
            'hours' => 'required|string',
            'resources' => 'nullable|string',
            'certificate' => 'required|string',
            'featured' => 'required|boolean',
            'status' => 'required|boolean',
            'category_id' => 'required|integer',
            'instructor_id' => 'required|integer',
            'batch_id' => 'required',
            'class_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'type' => 'required|integer',
            'video_link' => 'nullable|url',
            'regular_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'discount_type' => 'nullable|integer',
            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',
            'course_image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
    
        // Create a new Course instance and populate it with request data
        $course = new Course();
        $user_id = Auth::guard('admin')->user()->id;
    
        // Mapping request data to the Course model attributes
        $course->name_en = $request->name_en;
        $course->name_bn = $request->name_bn;
        $course->title_en = $request->title_en;
        $course->title_bn = $request->title_bn;
        $course->level = $request->level;
        $course->lessons = $request->lessons;
        $course->duration = $request->duration;
        $course->hours = $request->hours;
        $course->resources = $request->resources;
        $course->certificate = $request->certificate;
        $course->featured = $request->featured;
        $course->status = $request->status;
        $course->category_id = $request->category_id;
        $course->instructor_id = $request->instructor_id;
        $course->batch_id = $request->batch_id;
        $course->class_id = $request->class_id;
        $course->subject_id = $request->subject_id;
        $course->type = $request->type;
        $course->video_link = $request->video_link;
        $course->regular_price = $request->regular_price;
        $course->discount_price = $request->discount_price;
        $course->discount_type = $request->discount_type;
        $course->description_en = $request->description_en;
        $course->description_bn = $request->description_bn;
        $course->promo_code = mt_rand(1000, 9999); // Generate a random promo code
        $course->created_by = $user_id;
        $course->save();
    
        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/course'), $filename);
            $course->course_image = $filename;
        }
    
        $course->save();

        flash()->addSuccess("Course Created Successfully.");
        return redirect('/admin/courses/index');
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
        if (!$course) {
            return redirect()->route('courses.index')->with('error', 'Course not found.');
        }
        
        $instructors = User::where('role', 'Instructor')->latest()->get();
        $categories = Category::all();
        $classes = CourseClass::where('status', 1)->latest()->get(); // Fetch all active classes
        $subjects = Subject::where('status', 1)->latest()->get(); // Fetch active subjects
        $pageTitle = 'Course Edit';
    
        return view('admin.courses.edit', compact('course', 'instructors', 'categories', 'pageTitle', 'classes', 'subjects'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    //    dd($request->all());
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_bn' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_bn' => 'required|string|max:255',
            'level' => 'required|integer',
            'lessons' => 'required|integer',
            'duration' => 'required|string',
            'hours' => 'required|string',
            'resources' => 'nullable|string',
            'certificate' => 'required|string',
            'featured' => 'required|boolean',
            'status' => 'required|boolean',
            'category_id' => 'required|integer',
            'instructor_id' => 'required|integer',
            'batch_id' => 'required',
            'class_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'type' => 'required|integer',
            'video_link' => 'nullable|url',
            'regular_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'discount_type' => 'nullable|integer',
            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',
            'course_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048', // Make this nullable to allow updates without image
        ]);
    
       // Create a new Course instance and populate it with request data
       $course = new Course();
       $user_id = Auth::guard('admin')->user()->id;

        $course = Course::findOrFail($id); // Automatically throws a 404 if not 
        $course->name_en = $request->name_en;
        $course->name_bn = $request->name_bn;
        $course->title_en = $request->title_en;
        $course->title_bn = $request->title_bn;
        $course->level = $request->level;
        $course->lessons = $request->lessons;
        $course->duration = $request->duration;
        $course->hours = $request->hours;
        $course->resources = $request->resources;
        $course->certificate = $request->certificate;
        $course->featured = $request->featured;
        $course->status = $request->status;
        $course->category_id = $request->category_id;
        $course->instructor_id = $request->instructor_id;
        $course->batch_id = $request->batch_id;
        $course->class_id = $request->class_id;
        $course->subject_id = $request->subject_id;
        $course->type = $request->type;
        $course->video_link = $request->video_link;
        $course->regular_price = $request->regular_price;
        $course->discount_price = $request->discount_price;
        $course->discount_type = $request->discount_type;
        $course->description_en = $request->description_en;
        $course->description_bn = $request->description_bn;
        $course->promo_code = mt_rand(1000, 9999); // Generate a random promo code
        $course->updated_by = $user_id;

        // Check if the course_image file is present in the request
        if ($request->hasFile('course_image')) {
            // Delete old image if it exists
            if ($course->course_image) {
                $oldImagePath = public_path('upload/course/' . $course->course_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Remove the old image file
                }
            }
    
            // Process the new image upload
            $file = $request->file('course_image');
            $filename = date('YmdHi') . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/course'), $filename);
            $course->course_image = $filename; // Update the course_image field
        }
    
        // Save the updated course
        $course->save();
    
        flash()->addSuccess("Course Updated Successfully.");
        return redirect('/admin/courses/index');
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
