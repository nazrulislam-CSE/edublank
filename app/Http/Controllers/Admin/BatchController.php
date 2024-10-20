<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batch;
use Illuminate\Support\Carbon;
use Auth;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Batch List';
        $batches = Batch::latest()->get();
        return view('admin.batch.index', compact('pageTitle', 'batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Batch Create';
        return view('admin.batch.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_en' => 'required',
            'name_bn' => 'required',
            'status' => 'required',
        ]);

        $user_id = Auth::guard('admin')->user()->id;

        Batch::create([
            'name_en' => $request->name_en,
            'name_bn' => $request->name_bn,
            'status' => $request->status,
            'created_by'  => $user_id,
        ]);

        flash()->addSuccess("batch Created Successfully.");
        $url = '/admin/batch/index';
        return redirect($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Batch View';
        $batch = Batch::find($id);
        return view('admin.batch.show', compact('pageTitle', 'batch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Batch Edit';
        $batch = Batch::find($id);
        return view('admin.batch.edit', compact('pageTitle', 'batch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batch = Batch::find($id);
        $user_id = Auth::guard('admin')->user()->id;

        $batch->name_en = $request->name_en;
        $batch->name_bn = $request->name_bn;
        $batch->status = $request->status;
        $batch->updated_by = $user_id;
        $batch->save();

        flash()->addSuccess("batch Updated Successfully.");
        $url = '/admin/batch/index';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batch = Batch::find($id);
        $batch->delete();

        flash()->addError("batch Deleted Successfully.");
        $url = '/admin/batch/index';
        return redirect($url);
    }
}
