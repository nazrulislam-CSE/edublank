<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Question List';
        $questions = Question::where('status',1)->latest()->get();
        return view('admin.question.index',compact('pageTitle', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Question Create';
        return view('admin.question.create',compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' =>'required',
            'a'   =>'required',
            'b'     =>'required',
            'c' =>'required',
            'd' =>'required',
            'answer'=>'required',
            'status'=>'required',
        ]);

        $user_id = Auth::guard('admin')->user()->id;

        Question::create([
            'question' => $request->question,
            'a'=> $request->a,
            'b'=> $request->b,
            'c'=> $request->c,
            'd'=> $request->d,
            'answer'=> $request->answer,
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
        return view('admin.question.edit',compact('pageTitle','question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_id = Auth::guard('admin')->user()->id;

        $question = Question::find($id);
        $question->question = $request->question;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->c;
        $question->d = $request->d;
        $question->answer = $request->answer;
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
