<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Subject;
use App\Models\CourseClass;
use Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Question List';
        $questions = Question::latest()->get();
        return view('admin.question.index',compact('pageTitle', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Question Create';
        $subjects = Subject::where('status',1)->latest()->get();
        $classes = CourseClass::where('status',1)->latest()->get();
        return view('admin.question.create',compact('pageTitle','subjects','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question_en' =>'required',
            'optiona_en'   =>'required',
            'optionb_en'     =>'required',
            'optionc_en'     =>'required',
            'optiond_en'     =>'required',
            'question_bn' =>'required',
            'optiona_bn'   =>'required',
            'optionb_bn'     =>'required',
            'optionc_bn'     =>'required',
            'optiond_bn'     =>'required',
            'answer'=>'required',
            'types'=>'required',
            'status'=>'required',
        ]);

        $user_id = Auth::guard('admin')->user()->id;

        Question::create([
            'question_en'=> $request->question_en,
            'question_bn'=> $request->question_bn,
            'optiona_en'=> $request->optiona_en,
            'optiona_bn'=> $request->optiona_bn,
            'optionb_en'=> $request->optiona_en,
            'optionb_bn'=> $request->optiona_bn,
            'optionc_en'=> $request->optiona_en,
            'optionc_bn'=> $request->optiona_bn,
            'optiond_en'=> $request->optiona_en,
            'optiond_bn'=> $request->optiona_bn,
            'answer'=> $request->answer,
            'class_id'=> $request->class_id,
            'subject_id'=> $request->subject_id,
            'types'=> $request->types,
            'status' => $request->status,
            'created_by'        => $user_id,
        ]);

        flash()->addSuccess("Question Created Successfully.");
        $url = '/admin/questions/index';
        return redirect($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Question View';
        $question = Question::find($id);
        return view('admin.question.show',compact('pageTitle','question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Question Edit';
        $question = Question::find($id);
        $subjects = Subject::where('status',1)->latest()->get();
        $classes = CourseClass::where('status',1)->latest()->get();
        return view('admin.question.edit',compact('pageTitle','question','subjects','classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_id = Auth::guard('admin')->user()->id;

        $question = Question::find($id);
        $question->question_en = $request->question_en;
        $question->question_bn = $request->question_bn;
        $question->optiona_en = $request->optiona_en;
        $question->optiona_bn = $request->optiona_bn;
        $question->optionb_en = $request->optiona_en;
        $question->optionb_bn = $request->optiona_bn;
        $question->optionc_en = $request->optiona_en;
        $question->optionc_bn = $request->optiona_bn;
        $question->optiond_en = $request->optiona_en;
        $question->optiond_bn = $request->optiona_bn;
        $question->answer = $request->answer;
        $question->class_id = $request->class_id;
        $question->subject_id = $request->subject_id;
        $question->types = $request->types;
        $question->status = $request->status;
        $question->updated_by = $user_id;
        $question->save();

        flash()->addSuccess("Question Updated Successfully.");
        $url = '/admin/questions/index';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $question = Question::find($id);
        $question->delete();

        flash()->addError("Question Deleted Successfully.");
        $url = '/admin/question/index';
        return redirect($url);
    }
}
