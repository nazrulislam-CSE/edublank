<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Page List';
        $pages = Page::latest()->get();
        return view('admin.page.index',compact('pageTitle', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Page Create';
        return view('admin.page.create',compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'page_title_en'        =>'required',
            'page_title_bn'        =>'required',
            'page_name_en'         =>'required',
            'page_name_bn'         =>'required',
            'meta_title'        =>'required',
            'keywords'          =>'required',
            'meta_description'  =>'required',
            'page_description_en'  =>'required',
            'page_description_bn'  =>'required',
            'position'          =>'required',
            'is_default'        =>'required',
            'status'            =>'required',
        ]);

        $user_id = Auth::guard('admin')->user()->id;

        
        Page::create([
            'page_title_en'        => $request->page_title_en,
            'page_title_bn'        => $request->page_title_bn,
            'page_name_en'         => $request->page_name_en,
            'page_name_bn'         => $request->page_name_bn,
            'page_slug'         => strtolower(trim(preg_replace('/\s+/', '-', $request->page_name_en))),
            'meta_title'        => $request->meta_title,
            'keywords'          => implode(',', $request->keywords),
            'meta_description'  => $request->meta_description,
            'page_description_en'  => $request->page_description_en,
            'page_description_bn'  => $request->page_description_bn,
            'is_default'        => $request->is_default,
            'position'          => $request->position,
            'status'            => $request->status,
            'created_by'        => $user_id,
        ]);

        flash()->addSuccess("Page Created Successfully.");
        $url = '/admin/pages/index';
        return redirect($url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Page Show';
        $page = Page::find($id);
        return view('admin.page.show',compact('pageTitle','page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Page Edit';
        $page = Page::find($id);
        return view('admin.page.edit',compact('pageTitle','page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_id = Auth::guard('admin')->user()->id;

        $page = Page::find($id);
        $page->page_title_en = $request->page_title_en;
        $page->page_title_bn = $request->page_title_bn;
        $page->page_name_en = $request->page_name_en;
        $page->page_name_bn = $request->page_name_bn;
        $page->page_slug = strtolower(trim(preg_replace('/\s+/', '-', $request->page_name)));
        $page->meta_title = $request->meta_title;
        $page->keywords = implode(',', $request->keywords);
        $page->meta_description = $request->meta_description;
        $page->page_description_en = $request->page_description_en;
        $page->page_description_bn = $request->page_description_bn;
        $page->is_default = $request->is_default;
        $page->position = $request->position;
        $page->status = $request->status;
        $page->created_by = $user_id;
        $page->save();

        flash()->addSuccess("Page Updated Successfully.");
        $url = '/admin/pages/index';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);
        $page->delete();

        flash()->addSuccess("Page Deleted Successfully.");
        $url = '/admin/pages/index';
        return redirect($url);
    }
}
