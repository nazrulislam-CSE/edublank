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
                    <p class="card-title my-0">{{ $pageTitle ?? 'Page Title' }}</p>
                    <div class="d-flex">
                        <a href="{{ route('admin.exam.index') }}" class="btn btn-danger me-2">
                            <i class="fas fa-list d-inline"></i> Exam List
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.exam.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <label for="batch_id">Batch Name:</label>
                                @error('batch_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Batch Name">
                                    <select name="batch_id" class="select2 form-control" multiple="multiple"
                                        data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Batch Name">
                                        <option value="">Select Batch</option>
                                        @foreach ($batches as $batch)
                                            <option value="{{ $batch->id }}">
                                                {{ $batch->name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <label for="class_id">Class Name:</label>
                                @error('class_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Class Name">
                                    <select name="class_id" class="select2 form-control">
                                        <option value="">Select Class</option>
                                        @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">
                                                {{ $class->name_en ?? 'Null' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <label for="subject_id">Subject Name:</label>
                                @error('subject_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="wrap" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Subject Name">
                                    <select name="subject_id" class="select2 form-control">
                                        <option value="">Select Subject</option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">
                                                {{ $subject->name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <label for="title_en">Exam Title English: <span class="text-danger"></span></label>
                                @error('title_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Exam Title English">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                                    <input type="text" value="{{ old('title_en') }}" class=" form-control"
                                        name="title_en" placeholder="Exam Title English">
                                </div>
                            </div>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <label for="title_bn">Exam Title Bangla: <span class="text-danger"></span></label>
                                @error('title_bn')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Exam Title Bangla">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                                    <input type="text" value="{{ old('title_bn') }}" class=" form-control"
                                        name="title_bn" placeholder="Exam Title Bangla">
                                </div>
                            </div>
                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                <label for="class_topic">Exam Topics: <span class="text-danger"></span></label>
                                @error('class_topic')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Exam Title English">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tags"></i></span>
                                    <input type="text" value="{{ old('class_topic') }}" class=" form-control"
                                        name="class_topic" placeholder="Exam Title English">
                                </div>
                            </div>

                            <div class="form-group col-xl-6 col-lg-6 col-md-6">
                                <label for="date">Start Time: <span class="text-danger"></span></label>
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-text"><i
                                            class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                    <input type="datetime-local" name="start_time" id="start_time" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-63">
                                <label for="time">End Time: <span class="text-danger"></span></label>
                                @error('time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group">
                                    <span class="input-group-text"><i
                                            class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                    <input type="datetime-local" name="end_time" id="end_time" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-6">
                                <label for="code">Exam Code: <span class="text-danger"></span></label>
                                @error('code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Exam Code">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-building"></i></span>
                                    <input type="text" value="{{ old('code') }}" class=" form-control"
                                        name="code" placeholder="Exam Code">
                                </div>
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-6">
                                <label for="marks">Total Mark: <span class="text-danger"></span></label>
                                @error('marks')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary"
                                    title="Exam Total Marks">
                                    <span class="input-group-text" title="Exam Total Marks" id="basic-addon1"><i
                                            class="fas fa-building"></i></span>
                                    <input type="number" min="0" value="{{ old('marks') }}"
                                        class=" form-control" name="total_mark" placeholder="Exam Total Marks">
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                                <button type="submit" class="add-to-cart btn btn-success btn-block"><i
                                        class="fas fa-plus"></i> Add Exam</button>
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
        $(document).ready(function() {
            $('#lecture_shit').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        /* ============== Summernote Added ============ */
        jQuery(function(e) {
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
