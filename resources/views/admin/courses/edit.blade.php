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
                <a href="{{ route('admin.course.index')}}" class="btn btn-danger me-2">
                    <i class="fas fa-list d-inline"></i> Course List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.course.update',$course->id)}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="course_name"> Name: <span class="text-danger"></span></label>
                       @error('course_name') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text" title="Course Name" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" value="{{ $course->course_name }}" class=" form-control" name="course_name" placeholder="Course Name">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="course_title"> Title: <span class="text-danger"></span></label>
                        @error('course_title') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Username" id="basic-addon1"><i class="fas fa-tag"></i></span>
                             <input type="text" value="{{ $course->course_title }}" class=" form-control" name="course_title" placeholder="Course Title">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="course_level"> Course Level: <span class="text-danger"></span></label>
                        @error('course_level') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Level" id="basic-addon1"><i class="fas fa-cog"></i></span>
                             <input type="text" value="{{ $course->course_level }}" class=" form-control" name="course_level" placeholder="Course Level">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="course_lessons"> Course Lessons: <span class="text-danger"></span></label>
                        @error('course_lessons') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Lessons" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ $course->course_lessons }}" class=" form-control" name="course_lessons" placeholder="Course Lessons">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="course_duration"> Course Duration: <span class="text-danger"></span></label>
                        @error('course_duration') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Duration" id="basic-addon1"><i class="fas fa-cog"></i></span>
                             <input type="text" min="0" value="{{ $course->course_duration }}" class=" form-control" name="course_duration" placeholder="Course Duration">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="course_hours"> Course Hours: <span class="text-danger"></span></label>
                        @error('course_hours') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Hourse" id="basic-addon1"><i class="fas fa-user"></i></span>
                             <input type="text" min="0" value="{{ $course->course_hours }}" class=" form-control" name="course_hours" placeholder="Course Hourse">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="resources"> Course Resources: <span class="text-danger"></span></label>
                        @error('resources') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Resources" id="basic-addon1"><i class="fas fa-cog"></i></span>
                             <input type="text" min="0" value="{{ $course->resources }}" class=" form-control" name="resources" placeholder="Course Resources">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="certificate"> Course Certificate: <span class="text-danger"></span></label>
                        @error('certificate') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Certificate" id="basic-addon1"><i class="fas fa-user"></i></span>
                             <input type="text" min="0" value="{{ $course->certificate }}" class=" form-control" name="certificate" placeholder="Course Certificate">
                         </div>
                    </div>
                   

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="featured">Featured:</label>
                       @error('featured') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select  name="featured" class=" form-control">
                             <option value="">Select Status</option>
                                <option value="1"@if($course->featured == 1) selected @endif>Is Featured</option>
                                <option value="0"@if($course->featured == 0) selected @endif>Not Is Featured</option>
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
                                 <option value="1"@if($course->status == 1) selected @endif>Active</option>
                                 <option value="0"@if($course->status == 0) selected @endif>Deactive</option>
                             </select>
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="category_id">Category:</label>
                        @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                             <select  name="category_id" class=" form-control">
                              <option value="">Select Category</option>
                                @foreach($categories  as $category)
                                    <option value="{{ $category->id }}"{{ $category->id == $course->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="instructor_id">Instructor:</label>
                        @error('instructor_id') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                             <select  name="instructor_id" class=" form-control">
                              <option value="">Select Instructor</option>
                                    @foreach($instructors  as $instructor)
                                        <option value="{{ $instructor->id }}" {{ $instructor->id == $course->instructor_id ? 'selected' : '' }}>{{ $instructor->name }}</option>
                                    @endforeach
                             </select>
                         </div>
                    </div>
 
                    <div class="form-group col-xl-3 col-lg-3 col-md-6">
                         <label for="course_image">Course Photo:</label>
                         @error('course_image') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-photo-video"></i></span>
                             <input type="file" name="course_image" id="course_image" class="form-control bg-white">
                         </div>
                    </div>
                    
 
                    <div class="form-group col-xl-3 col-lg-3 col-md-6">
                        
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        <img id="showImage" src="{{ (!empty($course->course_image)) ? url('upload/course/'.$course->course_image):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="video"> Course Video Link: <span class="text-danger"></span></label>
                        @error('video') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Course Video" id="basic-addon1"><i class="fas fa-video"></i></span>
                             <input type="text" min="0" value="{{ $course->video }}" class=" form-control" name="video" placeholder="Course Video Link">
                         </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-4 col-md-6">
                        <label for="regular_price">Regular Price: <span class="text-danger"></span></label>
                        @error('regular_price') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Selling Price" id="basic-addon1">৳</span>
                             <input type="number" min="0" value="{{ $course->regular_price}}" class=" form-control" name="regular_price" placeholder="Enter Regular Price">
                         </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-4 col-md-6">
                        <label for="discount_price">Discount Price: <span class="text-danger"></span></label>
                        @error('discount_price') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Selling Price" id="basic-addon1">৳</span>
                             <input type="number" min="0" value="{{ $course->discount_price}}" class=" form-control" name="discount_price" placeholder="Enter Discount Price">
                         </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-4 col-md-6">
                        <label for="discount_type">Discount Type:</label>
                        @error('discount_type') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group">
                             <span class="input-group-text" title="Name" id="basic-addon1">৳</span>
                             <select  name="discount_type" class=" form-control">
                              <option value="">Select Discount</option>
                                 <option value="1" @if($course->discount_type == 1) selected @endif>Flat</option>
                                 <option value="2"@if($course->discount_type == 2) selected @endif>Parcent %</option>
                             </select>
                         </div>
                     </div>

                    <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="description">Description:</label>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        <textarea name="description" id="description">{!! $course->description !!}</textarea>
                    </div>

                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i> Update Course</button>
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
       $('#course_image').change(function(e){
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
            $('#description').summernote({
                placeholder: 'Please some content here'
            });
        });
    });
    /* ============== Summernote Added ============ */
</script>

@endpush
