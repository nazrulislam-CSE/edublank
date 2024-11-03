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
    public function index(Exam $exam)
    { 
        $pageTitle = 'Question List';
        $questions = $exam->questions;
        return view('admin.question.index',compact('pageTitle','exam', 'questions'));
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
        if ($exam->questions()->exists()) {   
         return redirect()->back()->with('warning', 'Already Question Created.');
        }
        $exam = Exam::find($exam->id);
        $pageTitle = 'Question Create';
        $subjects = Subject::where('status',1)->latest()->get();
        $classes = CourseClass::where('status',1)->latest()->get();
        return view('admin.question.insert',compact('pageTitle','subjects','classes','exam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'questions.*.question_text' => 'required|string',
            'questions.*.answers' => 'required|array',
            'questions.*.correct_answer' => 'required|integer|min:0|max:3',
        ]);
    
        // Retrieve the Exam instance
        $exam = Exam::findOrFail($request->exam_id);
    
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
    
        return redirect()->route('admin.question.index', $exam);
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
        $question = Question::with('answers')->find($id);
        $subjects = Subject::where('status',1)->latest()->get();
        $classes = CourseClass::where('status',1)->latest()->get();
        return view('admin.question.edit',compact('pageTitle','question','subjects','classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question_text' => 'required|string',
            'answers' => 'required|array|min:4',
            'answers.*' => 'required|string',
            'correct_answer' => 'required|integer|min:0|max:3',
        ]);
    
        $question = Question::find($id);
        if (!$question) {
            return redirect()->route('exams.index')->with('error', 'Question not found');
        }
    
        $question->question_text = $request->question_text;
        $question->save();
    
        foreach ($question->answers as $index => $answer) {
            $answer->answer_text = $request->answers[$index];
            $answer->is_correct = ($index == $request->correct_answer);
            $answer->save();
        }
    
        return redirect()->back()->with('success', 'Question updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
    $question = Question::find($id);
    
    if (!$question) {
       
        return redirect()->back()->with('error', 'Question not found.');
    }
    $question->userAnswers()->delete();
    $question->delete();
    return redirect()->back()->with('success', 'Question deleted successfully.');
    }
}
