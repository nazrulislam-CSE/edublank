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
                <a href="{{ route('admin.exam.index')}}" class="btn btn-danger me-2">
                    <i class="fas fa-list d-inline"></i> Exam List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.exam.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="title_en">Exam Title English: <span class="text-danger"></span></label>
                       @error('title_en') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Title English">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                            <input type="text" value="{{ old('title_en')}}" class=" form-control" name="title_en" placeholder="Exam Title English">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="title_bn">Exam Title Bangla: <span class="text-danger"></span></label>
                        @error('title_bn') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Title Bangla">
                             <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                             <input type="text" value="{{ old('title_bn')}}" class=" form-control" name="title_bn" placeholder="Exam Title Bangla">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="code">Exam Code: <span class="text-danger"></span></label>
                        @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Code">
                             <span class="input-group-text" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="text" value="{{ old('code')}}" class=" form-control" name="code" placeholder="Exam Code">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="date">Exam Date: <span class="text-danger"></span></label>
                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                            <input name="date" id="date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="{{ date('m/d/Y') }}" type="text" autocomplete="off" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Date">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-63">
                        <label for="time">Exam Time: <span class="text-danger"></span></label>
                        @error('time') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group">
                            <span class="input-group-text"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                            <input name="time" id="time" class="form-control" placeholder="Exam Time" value="{{ now()->format('H:i') }}" type="time" autocomplete="off" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Time">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="marks">Exam Total Marks: <span class="text-danger"></span></label>
                        @error('marks') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Total Marks">
                             <span class="input-group-text" title="Exam Total Marks" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="number" min="0" value="{{ old('marks')}}" class=" form-control" name="marks" placeholder="Exam Total Marks">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="totaltime">Exam Total Time: <span class="text-danger"></span></label>
                        @error('totaltime') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Exam Total Time">
                             <span class="input-group-text" title="Exam Total Time" id="basic-addon1"><i class="fas fa-building"></i></span>
                             <input type="number" min="0" value="{{ old('totaltime')}}" class=" form-control" name="totaltime" placeholder="Exam Total Time">
                         </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="status">Status:</label>
                       @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Status">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select name="status" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>
                    </div>
                  
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i> Add Exam</button>
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
