<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Carbon;
use Auth;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Subject List';
        $subjects = Subject::latest()->get();
        return view('admin.subject.index',compact('pageTitle','subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Subject Create';
        return view('admin.subject.create',compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_en' =>'required',
            'name_bn' =>'required',
            'status'=>'required',
        ]);

        $user_id = Auth::guard('admin')->user()->id;

        Subject::create([
            'name_en' => $request->name_en,
            'name_bn' => $request->name_bn,
            'status' => $request->status,
            'created_by'  => $user_id,
        ]);

        flash()->addSuccess("Subject Created Successfully.");
        $url = '/admin/subjects/index';
        return redirect($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Subject View';
        $subject = Subject::find($id);
        return view('admin.subject.show',compact('pageTitle','subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Subject Edit';
        $subject = Subject::find($id);
        return view('admin.subject.edit',compact('pageTitle','subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::find($id);
        $user_id = Auth::guard('admin')->user()->id;

        $subject->name_en = $request->name_en;
        $subject->name_bn = $request->name_bn;
        $subject->status = $request->status;
        $subject->updated_by = $user_id;
        $subject->save();

        flash()->addSuccess("Subject Updated Successfully.");
        $url = '/admin/subjects/index';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::find($id);
        $subject->delete();

        flash()->addError("Subject Deleted Successfully.");
        $url = '/admin/subjects/index';
        return redirect($url);
    }
}
