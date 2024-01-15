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
            <form action="{{ route('admin.course.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="name_en">Name English: <span class="text-danger"></span></label>
                        @error('name_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Name English">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ old('name_en')}}" class=" form-control" name="name_en" placeholder="Course Name English">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="name_bn">Name Bangla: <span class="text-danger"></span></label>
                        @error('name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Name Bangla">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ old('name_bn')}}" class=" form-control" name="name_bn" placeholder="Course Name Bangla">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="name_en">Title English: <span class="text-danger"></span></label>
                        @error('name_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Title English">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ old('title_en')}}" class=" form-control" name="title_en" placeholder="Course Title English">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="name_bn">Title Bangla: <span class="text-danger"></span></label>
                        @error('name_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Title Bangla">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ old('title_bn')}}" class=" form-control" name="title_bn" placeholder="Course Title Bangla">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="level"> Course Level: <span class="text-danger"></span></label>
                        @error('level') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Level">
                             <span class="input-group-text" title="Course Level" id="basic-addon1"><i class="fas fa-cog"></i></span>
                             <input type="text" value="{{ old('level')}}" class=" form-control" name="level" placeholder="Course Level">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="lessons"> Course Lessons: <span class="text-danger"></span></label>
                        @error('lessons') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Lessons">
                             <span class="input-group-text" title="Course Lessons" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ old('lessons')}}" class=" form-control" name="lessons" placeholder="Course Lessons">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="duration"> Course Duration: <span class="text-danger"></span></label>
                        @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Duration">
                             <span class="input-group-text" title="Course Duration" id="basic-addon1"><i class="fas fa-cog"></i></span>
                             <input type="text" min="0" value="{{ old('duration')}}" class=" form-control" name="duration" placeholder="Course Duration">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="hours"> Course Hours: <span class="text-danger"></span></label>
                        @error('hours') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Hourse">
                             <span class="input-group-text" title="Course Hourse" id="basic-addon1"><i class="fas fa-user"></i></span>
                             <input type="text" min="0" value="{{ old('hours')}}" class=" form-control" name="hours" placeholder="Course Hourse">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="resources"> Course Resources: <span class="text-danger"></span></label>
                        @error('resources') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Resources">
                             <span class="input-group-text" title="Course Resources" id="basic-addon1"><i class="fas fa-cog"></i></span>
                             <input type="text" min="0" value="{{ old('resources')}}" class=" form-control" name="resources" placeholder="Course Resources">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="certificate"> Course Certificate: <span class="text-danger"></span></label>
                        @error('certificate') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Certificate">
                             <span class="input-group-text" title="Course Certificate" id="basic-addon1"><i class="fas fa-user"></i></span>
                             <input type="text" min="0" value="{{ old('certificate')}}" class=" form-control" name="certificate" placeholder="Course Certificate">
                         </div>
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="featured">Featured:</label>
                       @error('featured') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Featured">
                            <select  name="featured" class="select2 form-control">
                             <option value="">Select Status</option>
                                <option value="1" {{ old('featured') == '1' ? 'selected' : '' }}>Is Featured</option>
                                <option value="0" {{ old('featured') == '0' ? 'selected' : '' }}>Not Is Featured</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="status">Status:</label>
                        @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Status">
                             <select  name="status" class="select2 form-control">
                              <option value="">Select Status</option>
                                 <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                 <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Deactive</option>
                             </select>
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="category_id">Category:</label>
                        @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Category Name">
                             <select  name="category_id" class="select2 form-control">
                              <option value="">Select Category</option>
                                @foreach($categories  as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                @endforeach
                            </select>
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="instructor_id">Instructor:</label>
                        @error('instructor_id') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Name">
                             <select  name="instructor_id" class="select2 form-control">
                              <option value="">Select Instructor</option>
                                    @foreach($instructors  as $instructor)
                                        <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                    @endforeach
                             </select>
                         </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="class_id">Class Name:</label>
                        @error('class_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Class Name">
                            <select name="class_id" class="select2 form-control">
                                <option value="">Select Class</option>
                                @foreach($classes as $class)
                                    @php
                                        $question_class = App\Models\Question::where('class_id',$class->id)->latest()->get();
                                    @endphp
                                    @foreach($question_class->unique('class_id') as $key=> $question)
                                        <option value="{{ $question->class_id }}">{{ $question->class->name_en ?? 'Null'}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="subject_id">Subject Name:</label>
                        @error('subject_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Subject Name">
                            <select name="subject_id" class="select2 form-control">
                                <option value="">Select Subject</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject->id }}">
                                        {{ $subject->name_en }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="exam_id">Exam Name:</label>
                        @error('exam_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Name">
                            <select name="exam_id" class="select2 form-control">
                                <option value="">Select Exam</option>
                                @foreach($exams as $exam)
                                    <option value="{{ $exam->id }}">
                                        {{ $exam->title_en }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="type">Course Type:</label>
                        @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Type">
                            <select name="type" class="select2 form-control">
                                <option value="">Select Type</option>
                                    <option value="1">Academic Course</option>
                                    <option value="1">Online Course</option>
                                    <option value="1">Others Course</option>
                            </select>
                        </div>
                    </div>
 
                    <div class="form-group col-xl-3 col-lg-3 col-md-6">
                         <label for="image">Course Photo:</label>
                         @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Photo">
                             <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-photo-video"></i></span>
                             <input type="file" name="image" id="course_image" class="form-control bg-white">
                         </div>
                    </div>
                    
 
                    <div class="form-group col-xl-3 col-lg-3 col-md-6">
                        
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        <img id="showImage" src="{{ (!empty($profile->image)) ? url('upload/course/'.$profile->image):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="video_link"> Course Video Link: <span class="text-danger"></span></label>
                        @error('video_link') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Video Link">
                             <span class="input-group-text" title="Course Video" id="basic-addon1"><i class="fas fa-video"></i></span>
                             <input type="text" min="0" value="{{ old('video_link')}}" class=" form-control" name="video_link" placeholder="Course Video Link">
                         </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-4 col-md-6">
                        <label for="regular_price">Regular Price: <span class="text-danger"></span></label>
                        @error('regular_price') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Regular Price">
                             <span class="input-group-text" title="Selling Price" id="basic-addon1">৳</span>
                             <input type="number" min="0" value="" class=" form-control" name="regular_price" placeholder="Enter Regular Price">
                         </div>
                    </div>
                    <div class="form-group col-xl-4 col-lg-4 col-md-6">
                        <label for="discount_price">Discount Price: <span class="text-danger"></span></label>
                        @error('discount_price') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Discount Price">
                             <span class="input-group-text" title="Selling Price" id="basic-addon1">৳</span>
                             <input type="number" min="0" value="" class=" form-control" name="discount_price" placeholder="Enter Discount Price">
                         </div>
                    </div>

                    <div class="form-group col-xl-4 col-lg-4 col-md-6">
                        <label for="discount_type">Discount Type:</label>
                        @error('discount_type') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Discount Type">
                             <span class="input-group-text" title="Name" id="basic-addon1">৳</span>
                             <select  name="discount_type" class=" form-control">
                              <option value="">Select Discount</option>
                                 <option value="1" {{ old('discount_type') == '1' ? 'selected' : '' }}>Flat</option>
                                 <option value="2" {{ old('discount_type') == '0' ? 'selected' : '' }}>Parcent %</option>
                             </select>
                         </div>
                     </div>

                     <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="description_en">Description English:</label>
                        @error('description_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="text-wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Description English">
                            <textarea name="description_en" id="description_en" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Description English">{{ old('description_en')}}</textarea>
                        </div>
                    </div>

                    <div class="form-group col-xl-12 col-lg-12  col-md-6">
                        <label for="description_bn">Description Bangla:</label>
                        @error('description_bn') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="text-wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Description Bangla">
                            <textarea name="description_bn" id="description_bn" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Course Description Bangla">{{ old('description_bn')}}</textarea>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i> Add Course</button>
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
