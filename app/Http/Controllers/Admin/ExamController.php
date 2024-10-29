<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\CourseClass;
use App\Models\Batch;
use App\Models\Subject;
use Auth;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Exam List';
        $exams = Exam::latest()->get();
        return view('admin.exam.index',compact('pageTitle', 'exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Exam Create';
        $batches = Batch::where('status', 1)->latest()->get();
        $classes = CourseClass::where('status',1)->latest()->get();
        $subjects = Subject::where('status',1)->latest()->get();
        return view('admin.exam.create',compact('pageTitle','classes','batches','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title_en' =>'required',
            'title_bn' =>'required',
            'class_topic' =>'required',
            'code' =>'required',
            'start_time' =>'required',
            'end_time' =>'required',
            'total_mark'   =>'required',
            'batch_id'     =>'required',
            'class_id'     =>'required',
            'subject_id'     =>'required',
        ]);


        Exam::create([
            'title_en'=> $request->title_en,
            'title_bn'=> $request->title_bn,
            'class_topic'=> $request->class_topic,
            'code'=> $request->code,
            'start_time'=> $request->start_time,
            'end_time'=> $request->end_time,
            'total_mark'=> $request->total_mark,
            'batch_id'=> $request->batch_id,
            'class_id'=> $request->class_id,
            'subject_id'=> $request->subject_id,
            'status' => 1,
        ]);

        flash()->addSuccess("Class Created Successfully.");
        $url = '/admin/exam/index';
        return redirect($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Exam View';
        $exam = Exam::find($id);
        return view('admin.exam.show',compact('pageTitle','exam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Exam Edit';
        $exam = Exam::find($id);
    
        if (!$exam) {
            return redirect()->route('admin.exam.index')->with('error', 'Exam not found');
        }
    
        // Use the ID directly for single foreign key fields
        $selectedBatch = $exam->batch_id;  // Single ID, no pluck needed
        $selectedClass = $exam->class_id;
        $selectedSubject = $exam->subject_id;
    
        $batches = Batch::where('status', 1)->latest()->get();
        $classes = CourseClass::where('status', 1)->latest()->get();
        $subjects = Subject::where('status', 1)->latest()->get();
    
        return view('admin.exam.edit', compact(
            'pageTitle', 'exam', 'batches', 'classes', 'subjects', 
            'selectedBatch', 'selectedClass', 'selectedSubject'
        ));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exam = Exam::find($id);
       
        $exam->title_en = $request->title_en;
        $exam->title_bn = $request->title_bn;
        $exam->code = $request->code;
        $exam->start_time = $request->start_time;
        $exam->end_time = $request->end_time;
        $exam->class_topic = $request->class_topic;
        $exam->total_mark = $request->total_mark;
        $exam->batch_id = $request->batch_id;
        $exam->class_id = $request->class_id;
        $exam->subject_id = $request->subject_id;
        $exam->status = 1;
        $exam->save();

        flash()->addSuccess("Exam Updated Successfully.");
        $url = '/admin/exam/index';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exam = Exam::find($id);
        $exam->delete();
        flash()->addError("Exam Deleted Successfully.");
        $url = '/admin/exam/index';
        return redirect($url);
    }
}
