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
                <a href="{{ route('admin.question.index')}}" class="btn btn-danger me-2">
                    <i class="fas fa-list d-inline"></i> Question List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.question.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-12 col-lg-12 col-md-12">
                        <label for="name">Question Name: <span class="text-danger"></span></label>
                        @error('question') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text" title="Question Name" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="" class=" form-control" name="question" placeholder="Your question Name">
                        </div>
                    </div>
                    <h4 class="text-success font-weaight-bolder">Give Options:</h4>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="a">Options A: <span class="text-danger"></span></label>
                       @error('a') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text" title="Question A" id="basic-addon1"><i class="fas fa-building"></i></span>
                            <input type="text" value="" class=" form-control" name="a" placeholder="Option A">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="b">Options B: <span class="text-danger"></span></label>
                        @error('b') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Question B" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="" class=" form-control" name="b" placeholder="Option B">
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="c">Options C: <span class="text-danger"></span></label>
                        @error('c') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Question C" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="" class=" form-control" name="c" placeholder="Option C">
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="d">Options D: <span class="text-danger"></span></label>
                        @error('d') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Question D" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="" class=" form-control" name="d" placeholder="Option D">
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="answer">Select Your Answer:</label>
                        @error('answer') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Answer" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
                             <select  name="answer" class=" form-control">
                              <option value="">Select Answer</option>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                             </select>
                         </div>
                     </div>
              
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="status">Status:</label>
                       @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select  name="status" class=" form-control">
                             <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                    </div>
  
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i> Add Question</button>
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
                    placeholder: 'Please some content here'
                });
            });
        });
        /* ============== Summernote Added ============ */
    </script>
@endpush
