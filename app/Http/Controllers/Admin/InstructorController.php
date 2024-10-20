<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Instructor List';
        $instructors = User::where('role', 'instructor')->get();
        return view('admin.instructor.index', compact('instructors', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Instructor Create';
        return view('admin.instructor.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);


        $instructor = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'show_password' => $request->password,
            'phone' => $request->phone,
            'present_address' => $request->present_address,
            'designation' => $request->designation,
            'facebook_url' => $request->facebook_url,
            'linkedin_url' => $request->linkedin_url,
            'twitter_url' => $request->twitter_url,
            'instagram_url' => $request->instagram_url,
            'about' => $request->about,
            'status' => $request->status,
            'role' => 'instructor',
        ]);

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/instructor/' . $instructor->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/instructor'), $filename);
            $instructor['image'] = $filename;
        }

        $instructor->save();

        flash()->addSuccess("Instructor Created Successfully.");
        $url = '/admin/instructors/index';
        return redirect($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $instructor = User::find($id);
        $pageTitle = 'Instructor View';
        return view('admin.instructor.show', compact('instructor', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $instructor = User::find($id);
        $pageTitle = 'Instructor Edit';
        return view('admin.instructor.edit', compact('instructor', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $instructor = User::find($id);
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->username = $request->username;
        $instructor->phone = $request->phone;
        $instructor->present_address = $request->present_address;
        $instructor->designation = $request->designation;
        $instructor->facebook_url = $request->facebook_url;
        $instructor->linkedin_url = $request->linkedin_url;
        $instructor->twitter_url = $request->twitter_url;
        $instructor->instagram_url = $request->instagram_url;
        $instructor->about = $request->about;
        $instructor->status = $request->status;
        $instructor->role = 'instructor';
        $instructor->save();

        if ($request->file('photo')) {
            @unlink(public_path('upload/instructor/' . $instructor->photo));
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/instructor'), $filename);
            $instructor['image'] = $filename;
        }


        $instructor->save();
        flash()->addSuccess("Instructor Updated Successfully.");
        $url = '/admin/instructors/index';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructor = User::find($id);
        $instructor->delete();

        try {
            if (file_exists($instructor->image)) {
                unlink($instructor->image);
            }
        } catch (Exception $e) {
        }

        flash()->addError("Instructor Deleted Successfully.");
        $url = '/admin/instructors/index';
        return redirect($url);
    }
}
