<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Subject;
use App\Models\Exam;
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
    public function insert(Exam $exam)
    {
        $pageTitle = 'Question Create';
        $subjects = Subject::where('status',1)->latest()->get();
        $classes = CourseClass::where('status',1)->latest()->get();
        return view('admin.question.insert',compact('pageTitle','subjects','classes','exam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
       

        dd($id);
        $request->validate([
            'questions.*.question_text' => 'required|string',
            'questions.*.answers' => 'required|array',
            'questions.*.correct_answer' => 'required|integer|min:0|max:3',
        ]);
    
        // Loop through each question
        foreach ($request->questions as $questionData) {
            // Create the question
            $question = $exam->questions()->create([
                'question_text' => $questionData['question_text'],
            ]);
            foreach ($questionData['answers'] as $index => $answerText) {
                // Determine if this answer is the correct one
                $isCorrect = $index == $questionData['correct_answer'];

                $question->answers()->create([
                    'answer_text' => $answerText,
                    'is_correct' => $isCorrect,
                ]);
            }
        }
        return redirect()->route('questions.index', $exam);
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
