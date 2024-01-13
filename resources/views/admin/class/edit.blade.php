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
                <a href="{{ route('admin.class.index')}}" class="btn btn-danger me-2">
                    <i class="fas fa-list d-inline"></i> Class List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.class.update',$class->id)}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="name_en">Name English: <span class="text-danger"></span></label>
                       @error('name_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Class Name Englilsh">
                            <span class="input-group-text" title="Class Name English" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ $class->name_en ?? 'Null'}}" class=" form-control" name="name_en" placeholder="Class Name English">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="name_bn">Name Bangla: <span class="text-danger"></span></label>
                        @error('name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Class Name Bangla">
                             <span class="input-group-text" title="Subject Name Bangla" id="basic-addon1"><i class="fas fa-tags"></i></span>
                             <input type="text" value="{{ $class->name_bn ?? 'Null'}}" class=" form-control" name="name_bn" placeholder="Class Name Bangla">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="video">Video Link: <span class="text-danger"></span></label>
                        @error('video') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Class Video Link">
                             <span class="input-group-text" title="Class Name Bangla" id="basic-addon1"><i class="fas fa-tags"></i></span>
                             <input type="text" value="{{ $class->video ?? 'Null'}}" class=" form-control" name="video" placeholder="Class Video Link">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="listening_voice">Listening Voice Link:  <span class="text-danger"></span></label>
                        @error('listening_voice') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Class Listening Voice">
                             <span class="input-group-text" title="Class Name Bangla" id="basic-addon1"><i class="fas fa-tags"></i></span>
                             <input type="text" value="{{ $class->listening_voice ?? 'Null'}}" class=" form-control" name="listening_voice" placeholder="Class Listening Voice Link">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="subject_id">Subject Name:</label>
                        @error('subject_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <select name="subject_id" class="select2 form-control" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Subject Name">
                            <option value="">Select Subject</option>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}"@if($subject->id == $class->subject_id) selected @endif>
                                    {{ $subject->name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="status">Status:</label>
                       @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select name="status" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1" @if($class->status == 1) selected @endif>Active</option>
                                <option value="0" @if($class->status == 0) selected @endif>Deactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="lecture_shit">Lecture Shit PDF: <span class="text-danger"></span></label>
                        @error('lecture_shit') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Lecture Shit PDF">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-photo-video"></i></span>
                            <input type="file" name="lecture_shit" id="lecture_shit" class="form-control bg-white">
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="lecture_shit">Lecture Shit PDF Show: <span class="text-danger"></span></label>
                        <iframe src="{{ $class->lecture_shit }}" frameborder="0" width="100" height="20"></iframe>
                    </div>

                    <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="description_en">Description English:</label>
                        @error('description_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <textarea name="description_en" id="description_en" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Description English">{{ $class->description_en ?? 'Null' }}</textarea>
                    </div>

                    <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="description_bn">Description Bangla:</label>
                        @error('description_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        <textarea name="description_bn" id="description_bn" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Description Bangla">{{ $class->description_bn ?? 'Null' }}</textarea>
                    </div>
  
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i> Update Class</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>
@endsection

@push('admin')
<!--profile photo  Show -->
<script type="text/javascript">
   $(document).ready(function(){
       $('#lecture_shit').change(function(e){
           var reader = new FileReader();
           reader.onload = function(e){
               $('#showImage').attr('src',e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
       });
   });
   /* ============== Summernote Added ============ */
    jQuery(function(e){
        'use strict';
        $(document).ready(function() {
            $('#description_en').summernote({
                placeholder: 'Please some english content here'
            });
            $('#description_bn').summernote({
                placeholder: 'Please some bangla content here'
            });
        });
    });
    /* ============== Summernote Added ============ */
</script>

@endpush
