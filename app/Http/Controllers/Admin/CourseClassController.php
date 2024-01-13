<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseClass;
use App\Models\Subject;
use Illuminate\Support\Carbon;
use Auth;

class CourseClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Class List';
        $classes = CourseClass::where('status',1)->latest()->get();
        return view('admin.class.index',compact('pageTitle', 'classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Class Create';
        $subjects = Subject::where('status',1)->latest()->get();
        return view('admin.class.create',compact('pageTitle','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_en' =>'required',
            'name_bn' =>'required',
            'video' =>'required',
            'lecture_shit' =>'required',
            'subject_id' =>'required',
            'listening_voice'   =>'required',
            'description_en'     =>'required',
            'description_bn'     =>'required',
            'status'=>'required',
        ]);

        $user_id = Auth::guard('admin')->user()->id;

        CourseClass::create([
            'name_en'=> $request->name_en,
            'name_bn'=> $request->name_bn,
            'video'=> $request->video,
            'lecture_shit'=> $request->lecture_shit,
            'subject_id'=> $request->subject_id,
            'listening_voice'=> $request->listening_voice,
            'description_en'=> $request->description_en,
            'description_bn'=> $request->description_bn,
            'status' => $request->status,
            'created_by'        => $user_id,
        ]);

        flash()->addSuccess("Class Created Successfully.");
        $url = '/admin/courses-class/index';
        return redirect($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Class View';
        $class = CourseClass::find($id);
        return view('admin.class.show',compact('pageTitle','class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Class Edit';
        $class = CourseClass::find($id);
        $subjects = Subject::where('status',1)->latest()->get();
        return view('admin.class.edit',compact('pageTitle','class','subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = CourseClass::find($id);
        $user_id = Auth::guard('admin')->user()->id;

        $class->name_en = $request->name_en;
        $class->name_bn = $request->name_bn;
        $class->video = $request->video;
        $class->lecture_shit = $request->lecture_shit;
        $class->subject_id = $request->subject_id;
        $class->listening_voice = $request->listening_voice;
        $class->description_en = $request->description_en;
        $class->description_bn = $request->description_bn;
        $class->status = $request->status;
        $class->updated_by = $user_id;
        $class->save();

        flash()->addSuccess("Class Updated Successfully.");
        $url = '/admin/courses-class/index';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = CourseClass::find($id);
        $class->delete();

        flash()->addError("Class Deleted Successfully.");
        $url = '/admin/courses-class/index';
        return redirect($url);
    }
}
