<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamDetail;
use Auth;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Exam List';
        $exams = ExamDetail::latest()->get();
        return view('admin.exam.index',compact('pageTitle', 'exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Exam Create';
        return view('admin.exam.create',compact('pageTitle'));
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
            'code' =>'required',
            'date' =>'required',
            'time' =>'required',
            'marks'   =>'required',
            'totaltime'     =>'required',
            'status'=>'required',
        ]);

        $user_id = Auth::guard('admin')->user()->id;

        ExamDetail::create([
            'title_en'=> $request->title_en,
            'title_bn'=> $request->title_bn,
            'code'=> $request->code,
            'date'=> $request->date,
            'time'=> $request->time,
            'marks'=> $request->marks,
            'totaltime'=> $request->totaltime,
            'status' => $request->status,
            'created_by'        => $user_id,
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
        $exam = ExamDetail::find($id);
        return view('admin.exam.show',compact('pageTitle','exam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Exam Edit';
        $exam = ExamDetail::find($id);
        return view('admin.exam.edit',compact('pageTitle','exam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exam = ExamDetail::find($id);
        $user_id = Auth::guard('admin')->user()->id;

        $exam->title_en = $request->title_en;
        $exam->title_bn = $request->title_bn;
        $exam->code = $request->code;
        $exam->date = $request->date;
        $exam->time = $request->time;
        $exam->marks = $request->marks;
        $exam->totaltime = $request->totaltime;
        $exam->status = $request->status;
        $exam->updated_by = $user_id;
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
