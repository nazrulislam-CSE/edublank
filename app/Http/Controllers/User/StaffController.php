<?php

namespace App\Http\Controllers\User;

use App\DataTables\StaffsDataTable;
use App\Helpers\FileManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StaffRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Image;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StaffsDataTable $staffsDataTable)
    {
        return $staffsDataTable->render('user.staff.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Staff';
        return view('user.staff.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffRequest $request)
    {
        // dd($request->all());

        // if ($request->hasfile('staff_image')) {
        //     $image = $request->file('staff_image');
        //     $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        //     Image::make($image)->save('upload/staff/' . $name_gen);
        //     $save_url = 'upload/staff/' . $name_gen;
        // } else {
        //     $save_url = $request->staff_image;
        // }

        $file = new FileManager();
        if ($request->image) {
            if ($request->image != null) {
                Storage::disk('profile')->delete($request->image);
            }
            $photo = $request->image;
            $file->folder('profile')->prefix('user-profile')->upload($photo) ? $image = $file->getName() : null;
        }

        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $image,
            'fathers_name' => $request->fathers_name,
            'mothers_name' => $request->mothers_name,
            'present_address' => $request->present_address,
            'parmanent_address' => $request->parmanent_address,
            'date_of_birth' => $request->date_of_birth,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'nid' => $request->nid,
            'birth_certificate' => $request->birth_certificate,
            'blood_group' => $request->blood_group,
            'gender' => $request->gender,
            'edu_qualification' => $request->edu_qualification,
            'experience' => $request->experience,
            'staff_id' => $request->staff_id,
            'staff_type' => $request->staff_type,
            'department_id' => $request->department_id,
            'designation_id' => $request->designation_id,
            'office_zone' => $request->office_zone,
            'joining_date' => $request->joining_date,
            'discharge_date' => $request->discharge_date,
            'machine_id' => $request->machine_id,
            'description' => $request->description,
            'marital_status' => $request->marital_status,
            'show_password' => $request->username,
            'password' => Hash::make($request->username),
            'created_by' => Auth::user()->username,
            'status' => $request->status,
            'created_at' => now(),
        ]);

        toast('Staff added successfully!', 'success');
        return redirect()->route('user.staff.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
