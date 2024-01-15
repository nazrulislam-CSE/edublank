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
            <form action="{{ route('admin.question.update',$question->id)}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-6 col-lg-6 col-md-12">
                        <label for="question_en">Question Name English: <span class="text-danger"></span></label>
                        @error('question_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Question Name English">
                            <span class="input-group-text" title="Question Name" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ $question->question_en }}" class=" form-control" name="question_en" placeholder="Your question Name english">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-12">
                        <label for="question_bn">Question Name Bangla: <span class="text-danger"></span></label>
                        @error('question_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Question Name Bangla">
                            <span class="input-group-text" title="Question Name" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ $question->question_bn }}" class=" form-control" name="question_bn" placeholder="Your question Name bangla">
                        </div>
                    </div>
                    <h4 class="text-success font-weaight-bolder">Give Options:</h4>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="optiona_en">Options A English: <span class="text-danger"></span></label>
                        @error('optiona_en') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option A English">
                             <span class="input-group-text" title="Question A" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $question->optiona_en }}" class=" form-control" name="optiona_en" placeholder="Option A English">
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                         <label for="optiona_en">Options A Bangla: <span class="text-danger"></span></label>
                         @error('optiona_bn') <span class="text-danger">{{ $message }}</span> @enderror
                          <div class="input-group"data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option A Bangla">
                              <span class="input-group-text" title="Question A" id="basic-addon1"><i class="fas fa-building"></i></span>
                              <input type="text" value="{{ $question->optiona_bn }}" class=" form-control" name="optiona_bn" placeholder="Option A Bangla">
                          </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="optionb_en">Options B English: <span class="text-danger"></span></label>
                        @error('optionb_en') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option B English">
                             <span class="input-group-text" title="Question B" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $question->optionb_en }}" class=" form-control" name="optionb_en" placeholder="Option B English">
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="optionb_bn">Options B Bangla: <span class="text-danger"></span></label>
                        @error('optionb_bn') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option B Bangla">
                             <span class="input-group-text" title="Question B" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $question->optionb_bn }}" class=" form-control" name="optionb_bn" placeholder="Option B Bangla">
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="optionc_en">Options C English: <span class="text-danger"></span></label>
                        @error('optionc_en') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option C English">
                             <span class="input-group-text" title="Question C" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $question->optionc_en }}" class=" form-control" name="optionc_en" placeholder="Option C English">
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="optionc_bn">Options C Bangla: <span class="text-danger"></span></label>
                        @error('optionc_bn') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option C Bangla">
                             <span class="input-group-text" title="Question C" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $question->optionc_bn }}" class=" form-control" name="optionc_bn" placeholder="Option C Bangla">
                         </div>
                     </div>
                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="optiond_en">Options D English: <span class="text-danger"></span></label>
                        @error('optiond_en') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option D English">
                             <span class="input-group-text" title="Question D" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $question->optiond_en }}" class=" form-control" name="optiond_en" placeholder="Option D English">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="optiond_bn">Options D Bangla: <span class="text-danger"></span></label>
                        @error('optiond_bn') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Option D Bangla">
                             <span class="input-group-text" title="Question D" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $question->optiond_bn }}" class=" form-control" name="optiond_bn" placeholder="Option D Bangla">
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="answer">Select Your Answer:</label>
                        @error('answer') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Select Your Answer">
                             <span class="input-group-text" title="Answer" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
                             <select  name="answer" class=" form-control">
                              <option value="">Select Answer</option>
                                    <option value="a" @if($question->answer == 'a') selected @endif>A</option>
                                    <option value="b" @if($question->answer == 'b') selected @endif>B</option>
                                    <option value="c" @if($question->answer == 'c') selected @endif>C</option>
                                    <option value="d" @if($question->answer == 'd') selected @endif>D</option>
                             </select>
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="types">Select Quiz Types:</label>
                        @error('types') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Select Quiz Types">
                             <span class="input-group-text" title="types" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
                             <select  name="types" class=" form-control">
                              <option value="">Select Quiz Types</option>
                                    <option value="1"@if($question->types == '1') selected @endif>Reading Quiz</option>
                                    <option value="2"@if($question->types == '2') selected @endif>Vocabulary Quiz</option>
                                    <option value="3"@if($question->types == '3') selected @endif>Chapter Quiz </option>
                             </select>
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="class_id">Class Name:</label>
                        @error('class_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="warp" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Select Class Name">
                            <select name="class_id" class="select2 form-control">
                                <option value="">Select Class</option>
                                @foreach($classes as $class)
                                    <option value="{{ $class->id }}" @if($class->id == $question->class_id) selected @endif>
                                        {{ $class->name_en }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="subject_id">Subject Name:</label>
                        @error('subject_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="warp" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Select Subject Name">
                            <select name="subject_id" class="select2 form-control">
                                <option value="">Select Subject</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject->id }}"  @if($subject->id == $question->subject_id) selected @endif>
                                        {{ $subject->name_en }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
              
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="status">Status:</label>
                       @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Select Status">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select  name="status" class=" form-control">
                             <option value="">Select Status</option>
                                <option value="1" @if($question->status == 1) selected @endif>Active</option>
                                <option value="0" @if($question->status == 0) selected @endif>Deactive</option>
                            </select>
                        </div>
                    </div>
  
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i> Update Question</button>
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
