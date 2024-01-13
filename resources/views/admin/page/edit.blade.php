@extends('layouts.admin.app', [$pageTitle => 'Page Title'])
@section('content')
<div class="breadcrumb-header justify-content-between">
    <div class="d-flex align-items-center">
        {{-- <h4 class="content-title mb-2">Hi, welcome back!</h4> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle ?? 'Dashboard' }}</li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
            </ol>
        </nav>
    </div>
    <div class="d-flex my-auto">
        <div class=" d-flex right-page">
            <div class="d-flex justify-content-center me-5">
                <div class="">
                    <span class="d-block">
                        <span class="label ">EXPENSES</span>
                    </span>
                    <span class="value">
                        $53,000
                    </span>
                </div>
                <div class="ms-3 mt-2">
                    <span class="sparkline_bar"></span>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="">
                    <span class="d-block">
                        <span class="label">PROFIT</span>
                    </span>
                    <span class="value">
                        $34,000
                    </span>
                </div>
                <div class="ms-3 mt-2">
                    <span class="sparkline_bar31"></span>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="main-content-body">
        <div class="row row-sm">
            
    <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
            <p class="card-title my-0">{{ $pageTitle ?? 'Page Title'}}</p>
            <div class="d-flex">
                <a href="{{ route('admin.page.index')}}" class="btn btn-danger me-2">
                    <i class="fas fa-list d-inline"></i> Page List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.page.update',$page->id)}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="page_name_en">Page Name English: <span class="text-danger"></span></label>
                        @error('page_name_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Name English">
                            <span class="input-group-text" title="Page Name" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ $page->page_name_en }}" class=" form-control" name="page_name_en" placeholder="Page Name English">
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="page_name_bn">Page Name Bangla: <span class="text-danger"></span></label>
                        @error('page_name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Name Bangla">
                            <span class="input-group-text" title="Page Name" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ $page->page_name_bn }}" class=" form-control" name="page_name_bn" placeholder="Page Name Bangla">
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="page_title_en">Page Title English: <span class="text-danger"></span></label>
                        @error('page_title_en') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Title English">
                             <span class="input-group-text" title="Page Title" id="basic-addon1"><i class="fas fa-tags"></i></span>
                             <input type="text" value="{{ $page->page_title_en }}" class=" form-control" name="page_title_en" placeholder="Page Title English">
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="page_title_bn">Page Title Bangla: <span class="text-danger"></span></label>
                        @error('page_title_bn') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Title Bangla">
                             <span class="input-group-text" title="Page Title" id="basic-addon1"><i class="fas fa-tags"></i></span>
                             <input type="text" value="{{ $page->page_title_bn }}" class=" form-control" name="page_title_bn" placeholder="Page Title Bangla">
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="meta_title">Meta Title: <span class="text-danger"></span></label>
                        @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Meta Title">
                             <span class="input-group-text" title="Meta Title" id="basic-addon1"><i class="fas fa-tags"></i></span>
                             <input type="text" value="{{ $page->meta_title }}" class=" form-control" name="meta_title" placeholder="Meta Title">
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="keywords">Meta Keywords <small class="text-danger">( Write meta keywords Separated by Comma[,] )</small></label>
                        @error('keywords') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="text-wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Meta Keywords">
                                <div class="example">
                                <input type="text" name="keywords[]" data-role="tagsinput" value="{{ $page->keywords}}" class="form-control" placeholder="Enter type meta keywords here">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="meta_description">Meta Description:</label>
                        @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="text-wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Meta description">
                            <textarea name="meta_description" id="meta_description" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Meta Description">{{ $page->meta_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="position">Positions: (Top,Middle,Footer):</label>
                        @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Positions">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select  name="position" class=" form-control">
                              <option value="">Select Positions</option>
                              <option value="1" @if($page->position == 1) selected @endif>Top Positions</option>
                              <option value="2" @if($page->position == 2) selected @endif>Bootom Positions</option>
                              <option value="3" @if($page->position == 3) selected @endif>Footer Positions</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                       <label for="status">Status:</label>
                       @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Status">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select  name="status" class=" form-control">
                                <option value="">Select Status</option>
                                @if($page->status == 1)
                                    <option value="1" selected>Active</option>
                                    <option value="0">Deactive</option>
                                @else
                                    <option value="1">Active</option>
                                    <option value="0" selected>Deactive</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                        <label for="is_default">Is Default:</label>
                        @error('is_default') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Is Default">
                             <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                             <select  name="is_default" class=" form-control">
                              <option value="">Select Is Default</option>
                                 <option value="1"  @if($page->is_default == 1) selected @endif>Is Default</option>
                                 <option value="0"  @if($page->is_default == 0) selected @endif>Not Is Default</option>
                             </select>
                         </div>
                    </div>

                    <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="page_description_en">Page Description English:</label>
                        @error('page_description_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="text-wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Description English">
                            <textarea name="page_description_en" id="page_description_en" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Description English">{{ $page->page_description_en }}</textarea>
                        </div>
                    </div>

                    <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="page_description_bn">Page Description Bangla:</label>
                        @error('page_description_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="text-wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Description Bangla">
                            <textarea name="page_description_bn" id="page_description_bn" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Page Description Bangla">{{ $page->page_description_bn }}</textarea>
                        </div>
                    </div>
  
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i>Update Page</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>
@endsection
@push('admin')
	<script>
        /* ============== Summernote Added ============ */
        jQuery(function(e){
            'use strict';
            $(document).ready(function() {
                $('#meta_description').summernote({
                    placeholder: 'Please Meta Description here'
                });
                $('#page_description_en').summernote({
                    placeholder: 'Please Page Description English here'
                });
                $('#page_description_bn').summernote({
                    placeholder: 'Please Page Description Bangla here'
                });
            });
        });
        /* ============== Summernote Added ============ */
    </script>
@endpush
